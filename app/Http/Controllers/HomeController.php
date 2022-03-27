<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Events\Verified;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
