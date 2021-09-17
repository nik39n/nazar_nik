@extends('layout')
@section('style')
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- banner -->
@widget('sm_banner_widget')
      <!-- крошки -->
      <p class="name-collection">TIAMO | Свадебные платья | Gabrielle</p>
      <!-- end-крошки -->
      <div class="row">
        <!--  -->
        
        <div class="col col-xxl-6 content-card pdl-90">
          @foreach($product->videos as $video)
          <iframe  src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="main-cards"></iframe>
            @endforeach
            @foreach($product->images as $image)
    
            <div ><img  class="main-cards" src="../img/{{$image->image}}" alt="{{$image->image}}"></div>
          @endforeach
        </div>
        <div class="col col-xxl-6 content-description">
          <div class="first-name">
          <p class="des-dress">{{ $product->name_product }} 
        </div>
        @if(!empty($product->price_hire))
        <div class="price">
          <p class="last-price" style="text-decoration: line-through;"> {{$product->price}} грн </p>
          <p class="new-price">{{$product->price_hire}} грн</p>
        </div>
        <p class="sale">{{$product->price_hire_text}}</p>
        @else
        <div class="price">
          <p class="last-price"> {{$product->price}} грн </p>
        </div>
        @endif
        <div class="text-color">
          <p class="fw-500">Цвет:</p> <p class="name-color fw-500">белый</p>
        </div>
        <div class="colour" id="colour">
          <div id="white" class="colour-square" OnClick="colour(this);">
            <div class="square" style="background: white;"></div>
          </div>
          <div class="colour-square" OnClick="colour(this);">
            <div class="square" style="background: black;"></div>
          </div>
        </div>
        <div class="table-size"><img src="../img/trempel.svg" alt=""> <p class="table"> <u>Таблица размеров</u> </p></div>
        <div class="size">

        </div>
        <div class="logo-sale">
          <div class="logo1"><img src="../img/img1.svg" alt=""></div>
          <div class="logo1"><img src="../img/img2.svg" alt=""></div>
        </div>
        <div class="sale-btn">
          <a href="{{ route('add.to.cart', $product->id) }}"><div class="btn-sale">В корзину</div></a>
          <div class="btn-sale">Примерить в салоне</div>
        </div>
        <a href="{{ route('add.to.wish', $product->id) }}"><div class="wish-list"><img src="../img/heart.svg" alt=""> <p class="wish"> Добавить в wishlist </p>
        </div></a>
        <div class="seria extra"> <p>Reference:</p> <p class="seria-text">154V06AM013_X0835 </p></div>
        <div class="extra"><img src="./img/characteristics.svg" alt=""><p class="extra-text"> Характеристики </p></div>
        <div class="extra"><img src="./img/box.svg" alt=""><p class="extra-text"> Доставка и оплата </p></div>
        <div class="extra"><img src="./img/share.svg" alt=""><p class="extra-text"> Поделиться </p>
        </div>
        </div>
      </div>

@widget('like_product_widget')
@widget('last_viewed_widget')
      @section('scripts')
      <script type="text/javascript">
    function colour(arg)
{
    alert(arg);
    let parent = document.getElementById("colour").childNodes;
    alert(parent);
    arg.style.borderBottom= "2px solid #000000" ;
}
</script>
    @endsection
@endsection