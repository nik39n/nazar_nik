@extends('auth.layouts.master')

@isset($product)
@section('title', 'Редактировать товар ' . $product->name)
@else
@section('title', 'Создать товар')
@endisset

@section('content')
<div class="col-md-12">
    @isset($product)
    <h1>Редактировать товар <b>{{ $product->name }}</b></h1>
    @else
    <h1>Добавить товар</h1>
    @endisset
    <form method="POST" enctype="multipart/form-data" @isset($product) action="{{ route('products.update', $product) }}" @else action="{{ route('products.store') }}" @endisset>
        <div>
            @isset($product)
            @method('PUT')
            @endisset
            @csrf
            <br>
            <div class="input-group row">
                <label for="name_product" class="col-sm-2 col-form-label">Название: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'name'])

                    <input type="text" class="form-control" name="name_product" id="name_product" value="@isset($product){{ $product->name_product }}
                               @endisset">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                <div class="col-sm-6">
                    <!-- @include('auth.layouts.error', ['fieldName' => 'category_id']) -->


                    <select name="category_id[]" id="category_id" class="form-control" multiple>
                        @foreach($categories as $category)

                        <option value="{{$category->id}}" @isset($product) @if($product->category_id == $category->id)
                            selected
                            @endif
                            @endisset
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="brand_id" class="col-sm-2 col-form-label">Бренд: </label>
                <div class="col-sm-6">
                    <!-- @include('auth.layouts.error', ['fieldName' => 'brand_id']) -->


                    <select name="brand_id[]" id="brand_id" class="form-control" multiple>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}" @isset($product) @if($product->brand_id == $brand->id)
                            selected
                            @endif
                            @endisset
                            >{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="content" class="col-sm-2 col-form-label">Описание: </label>
                <div class="col-sm-6">
                    @include('auth.layouts.error', ['fieldName' => 'content'])


                    <textarea name="content" id="content" value="@isset($product){{ $product->description }}@endisset" cols="40" rows="5" style="
    border: 1px solid #495057;
    border-radius: 3px;
">@isset($product){{ $product->description }}@endisset</textarea>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                <div class="col-sm-10">
                    @include('auth.layouts.error', ['fieldName' => 'image'])

                    <label class="btn btn-default btn-file">
                        Загрузить <input type="file" style="display: none;" name="image" id="image" value="@isset($product){{ $product->image }}@endisset">
                    </label>
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                <div class="col-sm-2">
                    @include('auth.layouts.error', ['fieldName' => 'price'])
                    <input type="text" class="form-control" name="price" id="price" value="@isset($product){{ $product->price }}@endisset">
                </div>
            </div>
            <br>
            <div class="input-group row">
                <label for="count" class="col-sm-2 col-form-label">price_hire_text: </label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="count" id="count" value="@isset($product){{ $product->price_hire_text }}@endisset">
                </div>
            </div>
            <br>
            @foreach([
            'hit' => 'Хит',
            'new'=> 'Новинка',
            'recommend' => 'Рекомендуемые'] as $field => $title)
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">{{$title}}</label>
                <div class="col-sm-6">
                    <input type="checkbox" class="form-control" name="{{$field}}" id="{{$field}}" @if(isset($product) && $product->$field === 1)
                    checked="'checked"
                    @endif
                    >
                </div>
            </div>
            @endforeach
            <button class="btn btn-success" style="
    font-size: 16px;
    font-weight: 400;
" style="
    font-size: 16px;
    font-weight: 500;
">Сохранить</button>
        </div>
    </form>
</div>
@endsection