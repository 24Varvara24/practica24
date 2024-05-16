@extends('layouts.market')
    <title>@section('title','Товары')</title>
        
{{-- @section('title','Все то') --}}
@section('style')
<link rel="stylesheet" href="{{asset('css/products/index.css')}}">

@endsection


@section('body')
<main>
    <h1>Products</h1>    
    <h3>Мы тщательно отбираем продукты, предлагаемые в нашем магазине, чтобы убедиться, что они соответствуют высочайшим стандартам качества и безопасности.</h1>
    
    <div class="prods">
      @foreach ($products_all as $product)
      <div class="card" style="width: 18rem;">
        <img src="https://klike.net/uploads/posts/2023-02/1675842971_3-353.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">{{$product->id}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="{{route('products.show',['product' => $product->id])}}">Посмотреть</a></li>
          <li class="list-group-item"><a href="{{route('products.edit',$product->id)}}">Редактировать</a></li>
          <form class="list-group-item" action="{{route('products.destroy',['product'=>$product->id])}}" method="POST">
            @csrf
            @method('DELETE')
          <input type="submit" value="Удалить товар">
        </form>
        <form class="list-group-item" action="{{ route('cart.update') }}" method="POST">
          @csrf
          @method('PUT')
          <input hidden value="{{ $product->id }}" name="product_id">
          <button type="submit" class="btn btn-primary">Добавить в заказ</button>
      </form>
        </ul>
      </div>
      @endforeach
    </div>          
    

</main>    
@endsection

