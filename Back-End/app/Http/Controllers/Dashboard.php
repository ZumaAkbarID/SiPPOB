<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Traits\Digiflazz;
use App\Traits\Fonnte;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    use Digiflazz, Fonnte;

    function index()
    {
        $get_member = User::where('role', 'Member')->whereYear('created_at', date('Y'))->latest()->get();
        $trxToday = Transaction::whereDate('created_at', date('Y-m-d'))->get();
        $trxMonth = Transaction::whereMonth('created_at', date('m'))->get();

        $transactions = Transaction::select('payment', 'price', 'created_at')
            ->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()])
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('Y-m-d');
            });

        $paidData = [];
        $unpaidData = [];
        $expiredData = [];
        $salesData = [];
        $categories = [];

        foreach ($transactions as $date => $transactionGroup) {
            $paid = number_format($transactionGroup->where('payment', 'Paid')->sum('price'), 0, ',', '.');
            $unpaid = number_format($transactionGroup->where('payment', 'Unpaid')->sum('price'), 0, ',', '.');
            $expired = number_format($transactionGroup->where('payment', 'Expired')->sum('price'), 0, ',', '.');
            $sales = number_format($transactionGroup->sum('price'), 0, ',', '.');

            $paidData[] = $paid;
            $unpaidData[] = $unpaid;
            $expiredData[] = $expired;
            $salesData[] = $sales;
            $categories[] = $date;
        }

        return view('Dashboard.Index', [
            'title' => 'Dashboard',
            'user' => Auth::user(),
            'remaining_balance' => $this->getBalance(),
            'new_member' => $get_member,
            'trxToday' => $trxToday,
            'trxMonth' => $trxMonth,
            'paidData' => $paidData,
            'unpaidData' => $unpaidData,
            'expiredData' => $expiredData,
            'salesData' => $salesData,
            'categories' => $categories,
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
