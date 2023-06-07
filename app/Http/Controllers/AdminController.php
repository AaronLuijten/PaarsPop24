<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showInfo()
    {
        return view('admin.info');
    }
}
