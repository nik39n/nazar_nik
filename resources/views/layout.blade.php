<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <!-- <link href="{{ asset('css/catalog.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sm-baner.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/card.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
  
<div class="container">
  
<nav class="navbar navbar-expand-lg navbar-light bg-white nav-flex">
        <div class="nav-content">
            <div class="nav-information">
              <div class="icon">
                <div class="svg"><img src="../img/local.svg" alt="adress"></div>
                <p class="text">Наши салоны</p>
              </div>
              <div class="icon">
                <div class="svg"><img src="../img/phone.svg" alt="phone"></div>
                <p class="text">Контакты</p>
              </div>
              <div class="icon">
                <div class="svg"><img src="../img/partner.svg" alt="partner"></div>
                <p class="text">Стать партнером</p>
              </div>
            </div>
            <div class="logo"> <a href="{{ route('index') }}"><img src="../img/logo.svg" class="logo"alt="logo"></a></div>
            <div class="nav-sale">
              <img src="../img/search.svg" alt="search">
              <div class="dropdown margin-0">
                      <button type="button" class="btn bg-w margin-0 btn-st" data-toggle="dropdown">
                          <i class="fa fa-shopping-wish" aria-hidden="true"></i><span class="badge badge-pill badge-danger badge-wish">{{ count((array) session('wish')) }}</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-cart">       
                          <table id="cart" class="table table-hover table-condensed">
                              <thead>
                                  <tr>
                                      <div style="width:100%;  margin-left: 12px;">Wishlist {{ count((array) session('wish')) }}</div>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php $total = 0 @endphp
                                  @if(session('wish'))
                                      @foreach(session('wish') as $id => $details)
                                          @php $total += $details['price'] * $details['quantity'] @endphp
                                          <tr data-id="{{ $id }}" class="tr-flex">
                                              <td data-th="Product " class="h-120">
                                                  <div class="row">
                                                       @foreach($details['images'] as $image)
                                                      @if($image["isdefaultImg"] ==1)
                                                      <div class="col-sm-3 hidden-xs"><img src="../img/{{ $image['image'] }}" width="113" height="120" class="img-responsive"/>
                                                      @endif
                                                      @endforeach
                                                    </div>
                                                  </div>
                                              </td>
                                              <td class="information h-120">
                                                  <div class="col-sm-9 pd-l-0">
                                                          <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                  </div>
                                              </td>
                                              <td class="actions h-120" data-th="">
                                                  <button class="btn btn-danger btn-sm remove-from-wish mr-bt-30"><i class="fa fa-trash-o">+</i></button>
                                                  <p class="t-price">${{ $details['price'] }}</p>
                                                  
                                              </td>
                                          </tr>
                                          <img src="" alt="">
                                      @endforeach
                                  @endif
                              </tbody>
                          </table>
                      </div>
                  </div>
              <div class="dropdown margin-0">
                      <button type="button" class="btn bg-w margin-0 btn-st" data-toggle="dropdown">
                          <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-cart">       
                          <table id="cart" class="table table-hover table-condensed">
                              <thead>
                                  <tr>
                                      <div style="width:100%;  margin-left: 12px;">Product {{ count((array) session('cart')) }}</div>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php $total = 0 @endphp
                                  @if(session('cart'))
                                      @foreach(session('cart') as $id => $details)
                                          @php $total += $details['price'] * $details['quantity'] @endphp
                                          <tr data-id="{{ $id }}" class="tr-flex">
                                              <td data-th="Product " class="h-120">
                                                  <div class="row">
                                                       @foreach($details['images'] as $image)
                                                      @if($image["isdefaultImg"] ==1)
                                                      <div class="col-sm-3 hidden-xs"><img src="../img/{{ $image['image'] }}" width="113" height="120" class="img-responsive"/>
                                                      @endif
                                                      @endforeach
                                                    </div>
                                                  </div>
                                              </td>
                                              <td class="information h-120">
                                                  <div class="col-sm-9 pd-l-0">
                                                          <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                  </div>
                                                  <p>${{ $details['price'] }}</p>
                                                  <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart input-quant" />
                                              </td>
                                              <td class="actions h-120" data-th="">
                                                  <button class="btn btn-danger btn-sm remove-from-cart mr-bt-30"><i class="fa fa-trash-o">+</i></button>
                                                  <p class="t-price">${{ $details['price'] * $details['quantity'] }}</p>
                                                  
                                              </td>
                                          </tr>
                                          <img src="" alt="">
                                      @endforeach
                                  @endif
                              </tbody>
                              <tfoot>
                                  <tr>
                                      <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                                  </tr>
                                  <tr>
                                      <td colspan="5" class="text-right">
                                          <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                                          <button class="btn btn-success">Checkout</button>
                                      </td>
                                  </tr>
                              </tfoot>
                          </table>
                      </div>
                  </div>
              <img src="../img/lan.svg" alt="lan">
            </div>
        </div>
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link  fw-600" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Sale
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Свадебные платья
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="dropdown-menuuuuuu">
                    <div class="left">                   
                        <li><a class="dropdown-item nav-h1" href="#">Бренд</a></li>                 
                         @widget('nav_brand_widget')
                    </div>
                    <div class="center">                   
                      <li><a class="dropdown-item nav-h1" href="#">Силуэты</a></li>                 
                      @widget('nav_collection_widget')
                    </div>
                    <div class="right"> 
                      <li><a class="dropdown-item nav-h1" href="#">Стиль</a></li>                 
                      @widget('nav_style_widget')
                    </div>
                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Вечерние платья
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="dropdown-menuuuuuu">
                    <div class="left">                   
                        <li><a class="dropdown-item nav-h1" href="#">Бренд</a></li>                 
                         @widget('nav_brand_widget')
                    </div>
                    <div class="center">                   
                      <li><a class="dropdown-item nav-h1" href="#">Силуэты</a></li>                 
                      @widget('nav_collection_widget')
                    </div>
                    <div class="right"> 
                      <li><a class="dropdown-item nav-h1" href="#">Стиль</a></li>                 
                      @widget('nav_style_widget')
                    </div>
                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link  fw-600" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Outlet
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<br/>
</div>
<div class="container">
  
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
  
    @yield('content')
</div>
  <div class="container">
  <div class="footer">
        <div class="footer-menu">
            <div class="footer-h1">Меню</div>
            <div class="footer-list">
                <div class="footer-list-item">Стать партнером</div>
                <div class="footer-list-item">Оплата и доставка</div>
                <div class="footer-list-item">Обмен и возврат</div>
                <div class="footer-list-item">Политика конфиденциальности</div>
                <div class="footer-list-item">Блог</div>
                <div class="footer-list-item">Контакты</div>
            </div>
        </div>
        <div class="footer-catalog">
            <div class="footer-h1">Каталог</div>
            <div class="footer-list">
                <div class="footer-list-item">Свадебные</div>
                <div class="footer-list-item">Вечерние</div>
                <div class="footer-list-item">Аксессуары</div>
            </div>
        </div>
        <div class="footer-social">
            <div class="footer-h1">Мы в соц. сетях:</div>
            <div class="social-icons">
                <img class="icon" src="../img/facebook 1.svg" alt="">
                <img class="icon" src="../img/instagram 2.svg" alt="">
                <img class="icon" src="../img/youtube 2.svg" alt="">
                <img class="icon" src="../img/bxl-pinterest 1.svg" alt="">
            </div>
        </div>
    </div>
  </div>
@yield('scripts')
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    $(".remove-from-wish").click(function (e) {
        e.preventDefault();
        
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.wish') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>