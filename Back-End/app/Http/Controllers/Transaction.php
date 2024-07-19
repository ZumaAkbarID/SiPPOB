<?php

namespace App\Http\Controllers;

use App\Models\Transaction as ModelsTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Transaction extends Controller
{
    function index()
    {
        $trxs = ModelsTransaction::all();

        return view('Dashboard.Transaksi', [
            'title' => 'Data Penjualan',
            'user' => Auth::user(),
            'trxs' => $trxs
        ]);
    }
}