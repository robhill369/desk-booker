<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;


class BookingController extends Controller
{
    public function store(Request $request)
    {
    
        $booking = new Booking();
        $booking->room_id = $request->room_id;
        $booking->desk_id = $request->desk_id;
        $booking->user_id = $request->user_id;
        $booking->save();

        return redirect(RouteServiceProvider::HOME);
    }
}
