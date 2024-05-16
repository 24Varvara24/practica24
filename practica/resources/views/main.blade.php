@extends('layouts.market')

@section('style')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('body')

<main>
    <div class="item1 ">

        <div class="item1__about-us container">
        
    
            <div class="item1-text">
                <span></span>
                <h1>SportStyle Pro</h1>
                <h3> Наша цель - сделать ваше онлайн шопинг-путешествие удобным, приятным и беззаботным. </h3>
            </div>
            <div class="item1__btns">
                <div class="mybtn">
                    <a href="{{route('cart.show')}}">Заказать</a></div>
                <div class="mybtn"><a href="{{route('products.index')}}">Список товаров</a></div>
            </div>
        </div>
    </div>
    <div class="item2">
        <div class="container">
            
        </div>
    </div>
</main>

@endsection