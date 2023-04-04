<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [CustomerController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/users',[UserController::class, 'index']);
Route::get( '/user/{id}',[UserController::class, 'show']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/rooms', [RoomController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
//Route::get('/delete/{id}',[CustomerController::class, 'delete']);
Route::get('/logout', [UserController::class, 'logout']);

//Route::get('/add/{id}', [CustomerController::class, 'add']);

//Route::get('/edit/{id}', [CustomerController::class, 'edit'])->middleware('auth');
//Route::post('/update', [CustomerController::class,'update']);

Route::get('/delete/{id}',[ProductController::class, 'delete']);
Route::get('/add/{id}', [ProductController::class, 'add']);

Route::get('/edit/{id}', [ProductController::class, 'edit'])->middleware('auth');
Route::post('/update', [ProductController::class,'update']);