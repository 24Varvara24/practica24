@extends('layouts.market')
@section('title','Toвар')

@section('style')
<link rel="stylesheet" href="{{ asset('css/products/show.css') }}">
@endsection

@section('body')
<main>
  <h1>PRODUCT</h1>
  <div class="prod">
    <img src="https://mobimg.b-cdn.net/v3/fetch/60/60136e84e7fd3ae2eeb153747c92d786.jpeg" alt="" class="prod__img">
    <div class="prod-line">
      <span class="prod__name">{{$product->name}}</span>
      <span class="prod__id">{{$product->id}}</span>
    </div>
    <span class="prod__descr">{{$product->description}}</span>
  </div>
  <div class="actions">
    <a class="mybtn" href="{{ route('products.edit', $product->id) }}">Редактировать</a>
    <form  action="{{route('products.destroy',['product'=>$product->id])}}" method="POST">
      @csrf
      @method('DELETE')
    <input class="mybtn" type="submit" value="Удалить товар">
  </form> 
  </div>
</main>
{{-- <h1>Товар {{$product->name}} </h1>
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        
      </tr>
    </thead>
    <tbody>
        
      <tr>

        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>
            <div style="display: inline-flex">          
                    <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>
                    <form  action="{{route('products.destroy',['product'=>$product->id])}}" method="POST">
                      @csrf
                      @method('DELETE')
                    <input type="submit" value="Удалить товар">
                  </form>   
            </div>
        </td>
      </tr>
    </tbody> --}}

@endsection
