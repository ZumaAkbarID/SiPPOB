<?php

use App\Http\Controllers\API\Auth\Login;
use App\Http\Controllers\API\Auth\Logout;
use App\Http\Controllers\API\Auth\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group([
    'prefix' => 'auth',
    'middleware' => 'guest'
], function () {
    Route::post('register', [Register::class, 'register']);
    Route::post('login', [Login::class, 'login']);
    Route::post('logout', [Logout::class, 'logout']);
});
