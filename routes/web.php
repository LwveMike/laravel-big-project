<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [ProductsController::class, 'index']);
Route::get('/create-product', [ProductsController::class, 'create'])->middleware(['auth']);
Route::post('/store-product', [ProductsController::class, 'store'])->middleware(['auth']);


Route::get('/men', [ProductsController::class, 'getMenProducts']);

Route::get('/women', [ProductsController::class, 'getWomenProducts']);

Route::get('/users-products', [ProductsController::class, 'getUsersProducts']);

Route::get('/delete-product/{id}', [ProductsController::class, 'destroy'] );

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');


require __DIR__.'/auth.php';
