<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Livewire\CartList;
use App\Http\Livewire\CategoryList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.home');
    // redirect()->route('dashboard');
})->middleware('can:admin.home')->name('dashboard');

//Rutas de contacto

Route::view('contactanos', 'contact')->name('contact');

//Rutas de productos

Route::get('producto/{product}', [ProductController::class, 'show'])->name('product');

//Rutas de tiendas

Route::get('tiendas', [ShopController::class, 'index'])->name('shops');

Route::get('tiendas/{shop}', [ShopController::class, 'show'])->name('shop');

Route::get('productos/carrito', [CartController::class, 'index'])->name('cart');

//Rutas categorias

Route::get('categorias', [CategoryController::class, 'index'])->name('categories');

Route::get('categorias/{category}', [CategoryController::class, 'show'])->name('categories.category');

Route::get('brands/{brand}', [CategoryController::class, 'store'])->name('brands.band');



//Cliente

Route::get('usuario/datos-personales', [ProfileController::class, 'index'])->middleware('can:client.home')->name('client.profile');


Route::get('order/comprobar-datos', [OrderController::class, 'index'])->middleware('can:client.order')->name('client.order');

Route::post('order/pago-producto', [OrderController::class, 'store'])->middleware('can:client.order')->name('client.order.delivery');

Route::post('order/pago-realizado', [OrderController::class, 'confirmPay'])->middleware('can:client.order')->name('client.order.confirm');
