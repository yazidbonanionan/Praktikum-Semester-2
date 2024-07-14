<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            if (Auth::user()->usertype == 'user') {
                return view('dashboard');
            } else {
                return view('admin');
            }
        } else {
            return redirect()->route('login'); // Atau rute lain untuk halaman login
        }
    }

    public function admin ()
    {
        return view('admin.index');
    }
    public function user ()
    {
        return view('dashboard');
    }
}
