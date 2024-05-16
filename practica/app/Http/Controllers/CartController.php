<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\User;

class CartController extends Controller
{
    public function show()
    {
        //$user = auth()->user();
       $user = User::with('cart')->find(auth()->user()->id); //auth()->user()
        
        //dd($user);

        return view('cart.cart', compact('user'));
    }

    public function update(Request $request)
    {
        //auth()->user()->addToCart($request->product_id); noooooooo
        User::with('cart')->find(auth()->user()->id)->addToCart($request->product_id);

        return redirect()->route('cart.show');
    }
}