@extends('layouts.market')
@section('title','Toвар')

@section('style')
<link rel="stylesheet" href="{{ asset('css/orders/show.css') }}">
@endsection

@section('body')

  <div class="card">
    <h5 class="card-header">Заказ номер {{$order->id}}</h5>
    <div class="card-body">
      <div >
        <h5 class="card-title">{{ $order->owner->name }}</h5>
  
      </div>
      
  
      <p class="card-text">{{$order->comment}} </p>
      <p class="card-text">Статус заказа: {{ $order->status }}</p>
  
      <div class="orders__btn">

        <a  href="{{ route('orders.edit', ['order'=>$order->id]) }}" class="mybtn">Отредактировать заказ</a>
        <form class="mybtn" action=" {{ route('orders.destroy', ['order'=>$order->id]) }}" method="POST">
        @csrf
        @method("DELETE")
        <input  class="mybtn" type="submit" value="Отменить заказ">
        
        </form>
    </div>
  </div>
  
      </div>




@endsection
