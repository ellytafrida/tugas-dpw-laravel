<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


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
    return view('frontview.home');
});

Route::get('/home', [HomeController::class, 'showHome']);
Route::get('/about', [HomeController::class, 'showAbout']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/category', [HomeController::class, 'showCategory']);
Route::get('/store', [HomeController::class, 'showStore']);
Route::get('/blank', [HomeController::class, 'showBlank']);
Route::get('/user', [HomeController::class, 'showUser']);
Route::get('/product', [HomeController::class, 'showProduct']);

Route::get('product/{product}/{hargaMin?}/{hargaMax?})', [HomeController::class, 'product']);

Route::post('product/filter', [ProductController::class, 'filter']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::get('/product/{product}/edit', [ProductController::class, 'edit']);
Route::put('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{user}', [UserController::class, 'show']);
Route::get('/user/{user}/edit', [UserController::class, 'edit']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'destroy']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::post('logout', [AuthController::class, 'logout']);

//Client
Route::get('home', [ClientController::class, 'showHome']);
Route::post('home/filter', [ClientController::class, 'filter']);
Route::get('produk/{produk}', [ClientController::class, 'showProduk']);

Route::get('/base', function () {
    return view('template.base');
});

Route::get('/table', function () {
    return view('backview.table');
});
