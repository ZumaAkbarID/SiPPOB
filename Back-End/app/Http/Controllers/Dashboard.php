<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\Digiflazz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    use Digiflazz;

    function index()
    {
        $get_member = User::where('role', 'Member')->whereYear('created_at', date('Y'))->latest()->get();

        return view('Dashboard.Index', [
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'remaining_balance' => $this->getBalance(),
            'new_member' => $get_member
        ]);
    }
}