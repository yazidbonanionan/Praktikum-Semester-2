<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index()
    {
        // Pastikan pengguna terotentikasi
        if(auth()->check()) {
            // Ambil nama pengguna dari objek auth()->user()
            $username = auth()->user()->name;
        } else {
            // Jika pengguna tidak terotentikasi, atur nilai default
            $username = 'Guest';
        }

        $data_layout = [
            'title' => 'Halaman Admin',
        ];
        View::share($data_layout); // Memasukkan 'title' ke semua view

        return view('admin.index', compact('username'));
    }
}

