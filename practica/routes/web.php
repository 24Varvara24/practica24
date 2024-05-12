<?php

// как в джанго регестрировали модели в admin.py
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
//use App\Models\Products;

//отрисовка главной страницы
Route::get('/', function () {
    //$products = Products::all();
    return view('main');
});

//для продукта прописываем маршруты - там их много
Route::resource('/products',ProductsController::class);

Route::resource('/orders',OrdersController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
