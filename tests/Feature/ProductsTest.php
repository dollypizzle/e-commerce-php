<?php

namespace Tests\Feature;

use App\Product;
use Tests\TestCase;
use Facades\Tests\Setup\ProductFactory;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /** @test */
    public function a_product_requires_an_owner()
    {
        $attributes = factory('App\Product')->raw();
        $this->post('/products', $attributes)->assertRedirect('login');
    }
    /** @test */
    public function a_user_can_create_a_product()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $this->get('/products/create')->assertStatus(200);
        $attributes = [
            'name' => $this->faker->sentence,
            'brand' => $this->faker->sentence,
            'picture' => $this->faker->image,
            'price' => $this->faker->randomDigit,
            'description' => $this->faker->sentence
        ];

        $this->post('/products', $attributes)->assertRedirect('/products');
        $this->assertDatabaseHas('products', $attributes);
        $this->get('/products')->assertSee($attributes['name']);
    }
    /** @test */
    public function a_product_requires_a_name()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = factory('App\Product')->raw(['name' => '']);
        $this->post('/products', $attributes)->assertSessionHasErrors('name');
    }
    /** @test */
    public function a_product_requires_a_brand()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = factory('App\Product')->raw(['brand' => '']);
        $this->post('/products', $attributes)->assertSessionHasErrors('brand');
    }
    /** @test */
    public function a_product_requires_an_image()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = factory('App\Product')->raw(['picture' => '']);
        $this->post('/products', $attributes)->assertSessionHasErrors('picture');
    }
    /** @test */
    public function a_product_requires_a_description()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = factory('App\Product')->raw(['description' => '']);
        $this->post('/products', $attributes)->assertSessionHasErrors('description');
    }
    /** @test */
    public function a_product_requires_a_price()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = factory('App\Product')->raw(['price' => '']);
        $this->post('/products', $attributes)->assertSessionHasErrors('price');
    }

    /** @test */
    public function a_user_can_view_their_product()
    {
        $this->withoutExceptionHandling();
        $product = factory('App\Product')->create();
        $this->get($product->path())
            ->assertSee($product->name)
            ->assertSee($product->picture)
            ->assertSee($product->price)
            ->assertSee($product->description);
    }
    /** @test */
    function a_user_can_delete_a_product()
    {
        $this->withoutExceptionHandling();

        $product = ProductFactory::create();
        $this->actingAs($product->owner)
            ->delete($product->path())
            ->assertRedirect('/products');
        $this->assertDatabaseMissing('products', $product->only('id'));
    }
}
