@extends('layouts.market')
@section('title','Toвар')

@section('style')
<link rel="stylesheet" href="{{ asset('css/products/show.css') }}">
@endsection

@section('body')
<main>
  <h1>CART</h1>
  <div class="container-sm justfify-content-center mt-2">
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Product</th>
                <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->cart as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>
                            <input value="{{ $item->pivot->amount }}" name="products[{{ $item->id }}][amount]">
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>
        <input hidden value="1" name="user_id">
        <input hidden value="0" name="status_id"> 
        <button type="submit" class="btn btn-primary">Оформить заказ</button>
    </form>
</div>
</main>


@endsection
