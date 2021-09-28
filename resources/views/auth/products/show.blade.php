@extends('auth.layouts.master')

@section('title', 'Продукт ' . $product->name)

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $product->id}}</td>
            </tr>
            <tr>
                <td>name_product</td>
                <td>{{ $product->name_product }}</td>
            </tr>
            <tr>
                <td>description</td>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <td>price</td>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <td>price_hire</td>
                <td>{{ $product->price_hire }}</td>
            </tr>
            <tr>
                <td>stock</td>
                <td>{{ $product->stock }}</td>
            </tr>
            <tr>
                <td>collection_id</td>
                <td>{{ $product->collection_id }}</td>
            </tr>
            <tr>
                <td>typeProduct_id</td>
                <td>{{ $product->typeProduct_id }}</td>
            </tr>
            <tr>
                <td>about</td>
                <td>{{ $product->about }}</td>
            </tr>
            <tr>
                <td>meta_key_words</td>
                <td>{{ $product->meta_key_words }}</td>
            </tr>
            <tr>
                <td>meta_descriptions</td>
                <td>{{ $product->meta_descriptions }}</td>
            </tr>
            <tr>
                <td>urlForSite</td>
                <td>{{ $product->urlForSite }}</td>
            </tr>
            <tr>
                <td>articul</td>
                <td>{{ $product->articul }}</td>
            </tr>
            <tr>
                <td>price_hire_text</td>
                <td>{{ $product->price_hire_text }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td>
                    @foreach($images as $image)
                        <img src="{{ Storage::url($image->image) }}" height="240px">
                    @endforeach    
                </td>
            </tr>
           
            </tbody>
        </table>
    </div>
@endsection