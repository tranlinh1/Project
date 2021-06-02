<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopAdmin extends Controller
{
    //
    public function index()
    {
        return 123;
    }

    public function login()
    {
        return view('admin/pages/login');
    }
}