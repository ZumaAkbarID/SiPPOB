<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\Digiflazz;
use App\Traits\Fonnte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    use Digiflazz, Fonnte;

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

    function test()
    {
        // $target = '081225389903';
        // $target = str_split($target, 1);
        // $target[0] = '62';
        // dd(join($target));
        dd($this->validate_number('081225389903'));
        // return $this->send_message('081225389903', "Halo dari local web\nini pake spasi ga?");
    }
}