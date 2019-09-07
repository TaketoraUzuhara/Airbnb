<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(int $id)
    {
      $hotels = Hotel::all();

      $current_hotel = Hotel::find($id);

      $hotels_images = Host::wehre('hotel_id',$current_hotel->id)->get();

      return view('hotel/layout',[
        'hotels_images' => $hotel_image,
      ]);

    }
}
