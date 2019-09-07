<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Hotels_image;

class HomeController extends Controller
{
    public function index()
    {
      $hotels = Hotel::all();

      $hotels_images = Hotels_image::all();

      return view('home/layout',[
        'hotels' => $hotels,
        'hotels_images' => $hotels_images,
      ]);
    }
}
