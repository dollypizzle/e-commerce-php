@extends ('layouts.header')

@section('content')

<div class="container">
    <header class="jumbotron mt-3">
        <div class="container">
            <h1>Shopping Made Easy</h1>
            <p>Buying And Selling Right @ Your Doorstep</p>
            <p>
                @if(isset(Auth::user()->id))
                <a class="btn btn-primary btn-lg" role="button" href="/products/create">Add a New Product </a>
                @endif
            </p>
        </div>
    </header>

    <div class="row">
        <div class="col-lg-12">
            <h3>Your Favourite Online Market</h3>
        </div>
    </div>

    <div class="row text-center">
        @foreach ($products as $product)
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="{{ $product->picture }}" class="img-thumbnail mb-3">
                <div>
                    <h4>{{ $product->name }}</h4>
                    <p>₦ {{ $product->price }}</p>
                </div>
                <p>
                    <a href="{{ $product->path() }}" class="btn btn-success">Read More</a>
                    <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-outline-info waves-effect" type="submit">Add to Cart!</a>
                </p>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection