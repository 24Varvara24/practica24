@extends('layouts.market')

@section('style')
<link rel="stylesheet" href="{{asset('css/products/create.css')}}">
@endsection

@section('body')
   <main class="container">
    <form action="{{route('orders.store')}}" method="POST">
        @csrf
        {{-- <input class="form-control" name="comment"> --}}
        <input hidden value="{{auth()->user()->id}}" name="user_id">{{-- почему 1? --}}
        <select class="form-select" aria-label="Default select example" name="status_id">
            @foreach ($statuses as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <input class="mybtn" type="submit" value="Заказать">
    </form>
    </main>
@endsection