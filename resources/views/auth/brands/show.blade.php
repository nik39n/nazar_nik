@extends('auth.layouts.master')

@section('title', 'Категория ' . $brand->name)

@section('content')
    <div class="col-md-12">
        <h1>Категория {{ $brand->name }}</h1>
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
                <td>{{ $brand->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $brand->name }}</td>
            </tr>
            <tr>
                <td>meta_key_words</td>
                <td>{{ $brand->meta_key_words }}</td>
            </tr>
            <tr>
                <td>meta_descriptions</td>
                <td>{{ $brand->meta_descriptions }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection