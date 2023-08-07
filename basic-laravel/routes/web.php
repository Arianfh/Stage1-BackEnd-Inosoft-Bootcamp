<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BasicPhpController;


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

Route::get('/variable', [BasicPhpController::class, 'dasarVariabel']);
Route::get('/operator', [BasicPhpController::class, 'operatorAritmatika']);
Route::get('/operator/penugasan', [BasicPhpController::class, 'operatorPenugasan']);
Route::get('/operator/perbandingan', [BasicPhpController::class, 'operatorPerbandingan']);
Route::get('/operator/logika', [BasicPhpController::class, 'operatorLogika']);
Route::get('/operator/incrementDecrement', [BasicPhpController::class, 'operatorIncrementDecrement']);

Route::get('/percabangan/if', [BasicPhpController::class, 'percabanganIf']);
Route::get('/percabangan/ifelse', [BasicPhpController::class, 'percabanganIfElse']);
Route::get('/percabangan/ifelseifelse', [BasicPhpController::class, 'percabanganIfelseifElse']);
Route::get('/percabangan/nestedif', [BasicPhpController::class, 'percabanganNestedIf']);
Route::get('/percabangan/switchcase', [BasicPhpController::class, 'switchCase']);

Route::get('/array/pertama', [BasicPhpController::class, 'arrayPertama']);
Route::get('/array/kedua', [BasicPhpController::class, 'arrayKedua']);
Route::get('/array/ketiga', [BasicPhpController::class, 'arrayKetiga']);
Route::get('/array/keempat', [BasicPhpController::class, 'arrayKeempat']);