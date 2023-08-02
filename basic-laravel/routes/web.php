<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'index']);

Route::get('/book/create', 'App\Http\Controllers\BookController@create');

Route::get('/item/create', [ItemController::class, 'insertPage']);
Route::post('/item/post', [ItemController::class, 'store']);

Route::get('/item', [ItemController::class, 'index']);