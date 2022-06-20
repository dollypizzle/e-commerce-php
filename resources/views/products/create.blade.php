@extends ('layouts.header')

@section('content')

<div class="container mt-5">
    <div class="row text-center">
        <div style="width: 50%; margin: 25px auto;">
            <form action="/products" method="POST">
                @csrf
                <h1 style="text-align-right py-2">Add new Products</h1>

                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="brand" placeholder="brand">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="picture" placeholder="image url">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="price" placeholder="price" min="0.01" step="0.01">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="description" placeholder="description">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Submit</button>
                </div>
            </form>
            <a href="/products">Back to product</a>
        </div>
    </div>
</div>
@endsection