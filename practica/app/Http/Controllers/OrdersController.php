<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use App\Dictionaries\OrderStatus;

class OrdersController extends Controller
{
    public function index()
    {     
        //создается связь с owner а с помощью get() делается sql запрос
        $orders=Orders::with('owner')->get();
        //dd($orders);
        return view('orders.index',compact('orders'));
    }
    public function create()
    {
        //статусы заказа передаются на стр с формой где они и используются
        $statuses = OrderStatus::statuses();
        return view('orders.create',['statuses'=>$statuses]);
    }
    public function store(Request $request)
    {
        $order=Orders::create([
            'user_id' => auth()->user()->id,
            'status_id' => $request->status_id,  
        ]);
        $order->products()->attach($request->products);
        //dd( $request);
        return redirect()->route('orders.index');
    }
    public function show(Orders $order)
    {
        //order- готовая таблица , а load- настраивает связь с products
        $order->load('products');
        return view('orders.show', compact('order'));
    }
    public function edit(Orders $order)
    {
        //то же что и в create
        $statuses = OrderStatus::statuses();
        return view('orders.edit', compact('order', 'statuses'));
    }
    public function update(Request $request, Orders $order)
    { 
        $order->update([
            'user_id' => auth()->user()->id,
            'status_id' => $request->status_id       
        ]);

        return redirect()->route('orders.index');
    }
    public function destroy(Orders $order)
    {
        $order->products()->detach(); 
        $order->delete();
        return redirect()->route('orders.index');
    }
}
