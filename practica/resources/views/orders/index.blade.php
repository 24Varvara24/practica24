@extends('layouts.market')

@section('style')
<style>
  .orders__btn{
    display: flex;
    flex-direction: row;
    justify-content: space-around;

}
</style>
@endsection


@section('body')
<div class="orders" style="  background-color:#6699FF;">
@foreach ($orders as $order)


<div class="card">
  <h5 class="card-header">Заказ номер {{$order->id}}</h5>
  <div class="card-body">
    <div >
      <h5 class="card-title">{{ $order->owner->name }}</h5>

    </div>
    

    
    <p class="card-text">Статус заказа: {{ $order->status }}</p>

    <div class="orders__btn" >
      <a href="{{ route('orders.show', ['order'=>$order->id]) }}" class="mybtn">Просмотр заказа</a>
      <a href="{{ route('orders.edit', ['order'=>$order->id]) }}" class="mybtn">Отредактировать заказ</a>
      <form action=" {{ route('orders.destroy', ['order'=>$order->id]) }}" method="POST">
      @csrf
      @method("DELETE")
      <input class="mybtn" type="submit" value="Отменить заказ">
      
      </form>
  </div>
</div>

</div>
@endforeach
</div>


@endsection