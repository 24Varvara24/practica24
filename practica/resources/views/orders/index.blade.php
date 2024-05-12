@extends('layouts.market')

@section('body')
<div class="orders">
@foreach ($orders as $order)
<div class="card">
    <div class="card-header">
      Заказ номер {{$order->number}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Особое обращение с заголовком</h5>
      <p class="card-text">{{$order->products}}</p>
      <a href="#" class="btn btn-primary">Перейти куда-нибудь</a>
    </div>
  </div>
@endforeach
</div>


@endsection