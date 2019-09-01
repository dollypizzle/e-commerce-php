<?php



namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'picture' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $attributes['owner_id'] = auth()->id();

        Product::create($attributes);

        return redirect('/products');
    }

    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $this->authorize('update', $product);

        $attributes = request()->validate([
            'name' => 'required',
            'brand' => 'required',
            'picture' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $attributes['owner_id'] = auth()->id();

        $product->update($attributes);

        return redirect($product->path());
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    public function cart()
    {
        return view('carts.cart');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "picture" => $product->picture
                ]
            ];

            session()->put('cart', $cart);

            return redirect('/cart');
            // return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect('/cart');
            // return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "picture" => $product->picture
        ];

        session()->put('cart', $cart);
        return redirect('/cart');
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function updated(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}
