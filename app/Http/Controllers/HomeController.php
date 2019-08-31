<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('home/layout');
    }

    public function index2()
    {
      return view('hotel/layout')
    }
}
