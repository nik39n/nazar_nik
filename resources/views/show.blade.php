@extends('layout')
  
@section('content')
<h1>Products </h1>
@foreach($product as $category)
<h2>Product Name: </h2>
<p>{{ $product->name_product }} || ${{$product->price}}</p>

<h3>Product Belongs to</h3>

<ul>
    @foreach($product->categories as $category)
    <li>{{ $category->name }}</li>
    @endforeach
    @foreach($product->seasons as $season)
    <li>{{ $season->name }}</li>
    @endforeach
    @foreach($product->images as $image)
    
    <img src="../img/{{$image->image}}" style="width: 100px;,height: 100px;" alt="">
    @endforeach
</ul>
@endsection