<?php

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

Route::get('/main', function () {
    return view('main');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::get('/products',  [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/CreateProduct',  [App\Http\Controllers\createProductController::class, 'index'])->name('CreateProduct');
Route::post('/p',  [App\Http\Controllers\createProductController::class, 'store']);
Route::get('{Product}',  [App\Http\Controllers\createProductController::class, 'showProduct']);
Route::patch('{Product}', [App\Http\Controllers\createProductController::class, 'update']);
Route::delete('{Product}', [App\Http\Controllers\createProductController::class, 'delete']);
