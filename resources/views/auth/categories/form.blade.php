@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редактировать категорию' . $category->name)
@else
    @section('title', 'Создать категорию')
@endisset


@section('content')
    <div class="col-md-12">
        @isset($category)
            <h1>Редактировать Категорию <b>{{ $category->name }}</b></h1>
                @else
                    <h1>Добавить Категорию</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($category)
                      action="{{ route('categories.update', $category) }}"
                      @else
                      action="{{ route('categories.store') }}"
                    @endisset
                >
                    <div>
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="code" class="col-sm-2 col-form-label">ID </label>
                            <div class="col-sm-6">
                                @error('code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="code" id="code"
                                       value="{{ old('code', isset($category) ? $category->id : null) }}">
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name :</label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($category){{ $category->name }}@endisset">
                            </div>
                        </div>


                            <br>
                        <div class="input-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status :</label>
                            <div class="col-sm-6">
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" name="status" id="status" class="form-control"   value="@isset($category){{ $category->status }}@endisset"></input>
                            </div>
                        </div>
                        <br>

                        <div class="input-group row">
                            <label for="meta_key_words" class="col-sm-2 col-form-label">meta_key_words</label>
                            <div class="col-sm-6">
                                @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" name="meta_key_words"  class="form-control" id="meta_key_words" value="@isset($category){{ $category->meta_key_words }}@endisset"></input>
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="meta_descriptions" class="col-sm-2 col-form-label">meta_descriptions</label>
                            <div class="col-sm-6">
                                @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" name="meta_descriptions" id="meta_descriptions" class="form-control" value="@isset($category){{ $category->meta_descriptions }}@endisset"></input>
                            </div>
                        </div>
                        <br>

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