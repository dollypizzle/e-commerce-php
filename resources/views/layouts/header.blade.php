<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOLMART</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/stylesheets/main.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a href="/" class="navbar-brand">
            <h2 class="mb-0">Dolmart</h2>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/products" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="/cart" class="nav-link">Shopping Cart
                    </a>
                </li>
                @if (!Auth::user())
                <li class="nav-item"><a href="/login" class="nav-link">LogIn</a></li>
                <li class="nav-item"><a href="/register" class="nav-link">Sign Up</a></li>
                @else
                <li class="nav-item"><a href="#" class="nav-link">Signed In As {{ Auth::user()->name }} </a></li>
                <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="nav-link">
                        {{ __('Logout') }}
                    </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endif
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>