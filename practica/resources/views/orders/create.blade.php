@extends('layouts.market')
@section('body')
<p>lj,fdktybt</p>
<form action="{{route('orders.store')}}" method="POST">
@csrf
<input type="text" name="products" id="" placeholder="prod">
<input type="number" name="user_id" id="" placeholder="N">
<input class="mybtn" type="submit" value="Заказать">
</form>
@endsection