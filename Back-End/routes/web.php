<?php

use App\Http\Controllers\Auth\Authentication;
use App\Http\Controllers\Category;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Product;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['guest'],
    'prefix' => 'auth'
], function () {
    Route::get('login', [Authentication::class, 'login'])->name('login');
    Route::post('login', [Authentication::class, 'loginProcess']);
});

Route::get('logout', [Authentication::class, 'logout'])
    ->middleware('auth')
    ->prefix('auth')
    ->name('logout');


Route::group([
    'middleware' => [IsAdmin::class, 'auth']
], function () {
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

    Route::get('kategori', [Category::class, 'index'])->name('kategori.index');
    Route::resource('produk', Product::class);
});

Route::get('test', [Dashboard::class, 'test']);
