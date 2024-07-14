<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Halaman user',
        ];
        View::share ($data_layout);
        return view('admin.index', ['username'=>'User']);
    }
}
