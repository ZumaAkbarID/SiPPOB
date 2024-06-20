<?php

use App\Http\Controllers\Auth\Authentication;
use App\Http\Controllers\Dashboard;
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
});
