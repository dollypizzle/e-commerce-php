@extends ('layouts.header')

@section('content')

<div class="container">

    <h1 style="text-align: center;" class="pt-3">Edit {{ $product->name }}</h1>
    <div class="row">
        <div style="width: 40%; margin: 25px auto;">
            <form action="{{ $product->path() }}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="brand" value="{{ $product->brand }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="price" value="{{ $product->price }}" min="0.01" step="0.01">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="picture" value="{{ $product->picture }}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="description" value="{{ $product->description }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Submit!</button>
                </div>
            </form>
            <a href="/products">Go Back</a>
        </div>
    </div>
</div>

@endsection