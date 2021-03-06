<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.index');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('payment', PaymentController::class)->names('admin.payment');