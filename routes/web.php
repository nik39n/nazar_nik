<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\Auth\LoginController;

use Illuminate\Support\Facades\Auth;



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

/* Route::get('/', function () {
    return view('tiamo');
}); */

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
Route::get("/logout", 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::get('/orders', 'App\Http\Controllers\Admin\OrderController@index')->name('home');
    });
    Route::resource('categories', 'App\Http\Controllers\Admin\CategoryController');
    Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
});

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('product/{product}', [ProductController::class, 'show'])->name('card');
Route::get('img', [ImagesController::class, 'img'])->name('img');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('catalog-style/{id}', [ProductController::class, 'catalogstyle'])->name('catalogstyle');
Route::get('catalog-collection/{id}', [ProductController::class, 'catalogcollection'])->name('catalogcollection');
Route::get('catalog-brand/{id}', [ProductController::class, 'catalogbrand'])->name('catalogbrand');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::get('add-to-wish/{id}', [ProductController::class, 'addToWish'])->name('add.to.wish');
Route::get('add-to-viewed/{id}', [ProductController::class, 'addToViewed'])->name('add.to.viewed');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'removecart'])->name('remove.from.cart');
Route::delete('remove-from-wish', [ProductController::class, 'removewish'])->name('remove.from.wish');
