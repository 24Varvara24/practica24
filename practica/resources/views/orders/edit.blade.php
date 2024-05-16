@extends('layouts.market')
@section('title','Редактировать товар')

@section('style')
<link rel="stylesheet" href="{{asset('css/products/create.css')}}">
@endsection



@section('body')

<main class='container'>
    
    <main class="container">
        <h1>Редактирование</h1>
        <form action="{{route('orders.update',$order->id)}}" method="POST">
            @csrf
            @method('PUT')
            {{-- <input class="form-control" name="comment" value="{{ $order->comment }}"> --}}
            <input hidden value="1" name="user_id">{{-- почему 1? --}}
            <select class="form-select" aria-label="Default select example" name="status_id">
                @foreach ($statuses as $key => $value)
                <option {{ $key == $order->status_id ? 'selected' : ''}} value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            <input class="mybtn" type="submit" value="Заказать">
        </form>
        </main>
</main>    
@endsection