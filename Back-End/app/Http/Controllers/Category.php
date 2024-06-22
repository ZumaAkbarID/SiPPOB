<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Category extends Controller
{
    function index()
    {
        return view('Category.Index', [
            'title' => 'Produk',
            'user' => Auth::user()
        ]);
    }
}
