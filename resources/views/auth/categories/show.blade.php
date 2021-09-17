@extends('auth.layouts.master')

@section('title', 'Категория ' . $category->name)

@section('content')
    <div class="col-md-12">
        <h1>Категория {{ $category->name }}</h1>
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
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $category->status }}</td>
            </tr>
            <tr>
                <td>meta_key_words</td>
                <td>{{ $category->meta_key_words }}</td>
            </tr>
            <tr>
                <td>meta_descriptions</td>
                <td>{{ $category->meta_descriptions }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection