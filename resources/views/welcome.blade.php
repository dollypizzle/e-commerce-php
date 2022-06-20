@extends ('layouts.header')

@section('content')

<div class="container mt-3 mb-3" style="height:296px">
    <div class="row no-gutters">
        <div class="col-md-3 bg-success">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnzbrkPHiaNkqb303eEo7WbAs4vENLSIrKeD2bBwp-iLqGtR3d" height="296" width="280">
        </div>
        <div class="col-md-6 bg-primary">
            <h1 class="text-light text-center" style="padding:20px">DOLMART</h1>
            <p class="text-center text-light">Buying And Selling Right @ Your Doorstep</p>
            <p class="p-5" style="margin-left:105px">
                <a class="btn btn-light btn-lg btn-secondary" role="button" href="/products">Checkout the Products</a>
            </p>
        </div>
        <div class="col-md-3 bg-warning">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnzbrkPHiaNkqb303eEo7WbAs4vENLSIrKeD2bBwp-iLqGtR3d" height="296" width="280">
        </div>
    </div>

</div>

<div class="row" style="margin:20px">
    <div class="col-md-3">
        <div id="carouselExampleCaptions" style="width:max-width;" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1522562888039-65d4059f6431?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" height="200" class="d-block w-100 container-center">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1513611771808-7e8ab7f1dec6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" height="200" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1523206489230-c012c64b2b48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" height="200" class="d-block w-100">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="">
            <h6 class=""><i class="fas fa-map-marker-alt"></i> CONTACT US</h6>
            <h6 class="" style="">44 New Design Street</h6>
            <h6 style="">Melbourne 005</h6>
            <h6 class="" style="">Australia 300</h6>

            <h6 class=""><i class="fas fa-map-marker-alt"></i> PHONE</h6>
            <h6 class="" style="">
                <a href="#" class="">01 (800) 433 544</a>
            </h6>
        </div>
    </div>
    <div class="col-md-3">
        <h6 class=""><i class="fas fa-envelope"></i> E-MAIL</h6>
        <h6 class="" style="">
            <a href="#" class="">info@Example.com</a>
        </h6>
        <h6 class="text=center P-2">CATEGORIES</h6>
        <ul>
            <li>Cars</li>
            <li>Television</li>
            <li>Speakers</li>
            <li>Phones</li>
        </ul>
        <div>


        </div>
    </div>
    <div class="col-md-3 bg-primary">
        <h5 class="p-4 text-center">ABOUT US</h5>
        <h6 class="pt-2 pb-2">
            DOLMART is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        </h6>
    </div>




</div>

@endsection