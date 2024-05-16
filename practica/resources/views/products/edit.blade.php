@extends('layouts.market')
@section('title','Редактировать товар')

@section('style')
<link rel="stylesheet" href="{{asset('css/products/create.css')}}">
@endsection



@section('body')

<main class='container'>
    <h1>СОЗДАНИЕ ТОВАРА</h1>
    <form action="{{route('products.update',$product->id)}}" method='POST' enctype="multipart/form-data">
        @csrf
        @method('PUT')        
        <input type="text" name='name' value="{{$product->name}}">
        <input type="text" name='description' value="{{$product->description}}">  
         
        <input class="mybtn" type="submit" value="Отредактировать">

    </form>
</main>    
@endsection