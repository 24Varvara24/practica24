@extends('layouts.market')
@section('title','Редактирование товара')


@section('style')
<link rel="stylesheet" href="{{asset('css/products/create.css')}}">
@endsection


@section('body')

<main class='container'>
    <h1>СОЗДАНИЕ ТОВАРА</h1>
    <form action="{{route('products.store')}}" method='POST' enctype="multipart/form-data">
        @csrf
        <input type="text" name='name' placeholder='Название товара'>
        <input type="text" name='description' placeholder='Описание товара'>
        <input type="file" name="image">
        <input class="mybtn" type="submit" value="Создать товар">
    </form>
</main>    
@endsection
