@extends('auth.layouts.master')

@isset($brand)
    @section('title', 'Редактировать бренд' . $brand->name)
@else
    @section('title', 'Создать бренд')
@endisset


@section('content')
    <div class="col-md-12">
        @isset($brand)
            <h1>Редактировать бренд <b>{{ $brand->name }}</b></h1>
                @else
                    <h1>Добавить бренд</h1>
                @endisset

                <form method="POST" enctype="multipart/form-data"
                      @isset($brand)
                      action="{{ route('brands.update', $brand) }}"
                      @else
                      action="{{ route('brands.store') }}"
                    @endisset
                >
                    <div>
                        @isset($brand)
                            @method('PUT')
                        @endisset
                        @csrf
                        
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name :</label>
                            <div class="col-sm-6">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name"
                                       value="@isset($brand){{ $brand->name }}@endisset">
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="meta_descriptions" class="col-sm-2 col-form-label" >meta_descriptions </label>
                            <div class="col-sm-6">
                                
							<textarea name="meta_descriptions" id="meta_descriptions" cols="40" rows="5" style="
    border: 1px solid #495057;
    border-radius: 3px;
" >@isset($brand){{ $brand->meta_descriptions }}@endisset</textarea>
                            </div>
                        </div>
                        <br>

                            <div class="input-group row">
                                <label for="meta_key_words" class="col-sm-2 col-form-label">meta_key_words</label>
                                <div class="col-sm-6">
                                   
                                    <textarea name="meta_key_words" id="meta_key_words" cols="40" rows="5" style="
    border: 1px solid #495057;
    border-radius: 3px;
">@isset($brand){{ $brand->meta_key_words }}@endisset</textarea>
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