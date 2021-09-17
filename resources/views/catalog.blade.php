@extends('layout')
@section('style')
<link href="{{ asset('css/catalog.css') }}" rel="stylesheet">
@endsection
@section('content')

      <!-- banner -->
      @widget('sm_banner_widget')
      @if(url()->current()=="http://127.0.0.1:8000/catalog-brand/2")
      <p class="name-collection"><a href="{{ route('index') }}">TIAMO</a> | exlusive</p>
      @else
      <p class="name-collection"><a href="{{ route('index') }}">TIAMO</a></p>
      @endif
      <p class="name-new-collection">NEW COLLECTION</p>
      <!-- video -->
      @widget('main_video_widget')
      <!-- filter -->
  <div class="filter">
        <div class="style">
        <div class="dropdown dropdown-btn">
        <button class="btn  dropdown-toggle" type="button"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
      <div class="dropdown dropdown-btn">
        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
    <div class="sort">
      <select class="form-select form-select-sm select" aria-label=".form-select-sm example">
        <option selected>Open this select menu</option>
        <option  value="1">One</option>
        <option  value="2">Two</option>
        <option  value="3">Three</option>
      </select>
  </div>
    </div>
    <!-- end-filter -->
    <div class="row">
    @foreach($products as $product)
        <div class="col col-xxl-4 ">
        
            <a href="{{ route('card', $product->id) }}">
              <div class="card" style="width: 400px;">
                @foreach($product->images as $image)
                    @if($image->isdefaultImg == 1)
                        <img src="../img/{{$image->image}}" class="card-img-top"alt="{{$image->image}}">
                    @endif
                @endforeach
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name_product }}</h5>
                  <p class="card-price">{{ $product->price }} ₴</p>
                </div>
              </div>
            </a>
        
          </div>
        </a>
      @endforeach
        </div>  
        {{$products->links("pagination::bootstrap-4")}}
@endsection
  
@section('scripts')

@endsection