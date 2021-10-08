<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
  
    <!-- <link href="{{ asset('css/catalog.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->

    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sm-baner.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/card.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- Favicon  -->



    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/classy-nav.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">





    <script src="{{ asset('js/app.js') }}"></script>


</head>
<body style="
    margin-top: 0px;
">
<div id="app">
<nav class="classy-navbar navbar-default navbar-expand-md navbar-light bg-light navbar-laravel d-flex align-items-center justify-content-between" id="essenceNav">
            <a class="navbar-brand" href="{{ route('index') }}">
                Вернуться на сайт
            </a>

            <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu ">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <div class="classynav">
                        <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0" style="width: 100%;">
                            @admin
                                <li><a href="{{route('categories.index')}}" class="nav-link">Категории</a></li>
                                <li><a href="{{route('products.index')}}"  class="nav-link">Товары</a>
                                <li><a href="{{route('brands.index')}}"  class="nav-link">Бренды</a>
                                <li><a href=""class="nav-link">Заказы</a></li>@else 
                            @endadmin
                        
                
                            @guest
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('login') }}">Войти</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('register') }}">Зарегистрироваться</a>
                                    </li>
                            @endguest

                            @auth
                                    <li class="nav-item dropdown">
                                            <form id="logout-form" action="{{ route('logout')}}" method="POST">
                                               <button type="submit" class="btn btn-primary">Выйти</button>
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
                @yield('content')
        </div>
    </div>
</div>





</body>
</html>