@extends ('layouts.header')

@section('content')

<div class="container mt-3">
    <h2>{{ $product->name }}</h2>
    <p><strong>Brand: </strong>{{ $product->brand }}</p>
    <div class="col-md-5 col-sm-6">
        <img src="{{ $product->picture }}" class="img-thumbnail" alt="Responsive image">
    </div>
    <p>₦ {{ $product->price }}</p>
    <p><strong>Description: </strong>{{ $product->description }}</p>

    <div class="d-flex">
        @can('update', $product)
        <a class="btn btn-xs btn-warning mr-3" href="{{ $product->path().'/edit' }}">Edit</a>
        @endcan
        @can('update', $product)
        <form class="delete-form" action="{{ $product->path() }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-xs btn-danger" value="Delete">
        </form>
        @endcan
    </div>

</div>

@endsection