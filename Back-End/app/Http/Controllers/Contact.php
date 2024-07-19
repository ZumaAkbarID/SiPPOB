<?php

namespace App\Http\Controllers;

use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Contact extends Controller
{
    function index()
    {
        $contacts = ModelsContact::all();

        return view('Dashboard.Contact', [
            'title' => 'Data Kontak',
            'user' => Auth::user(),
            'contacts' => $contacts
        ]);
    }
}
