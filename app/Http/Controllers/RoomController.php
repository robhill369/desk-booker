<?php

namespace App\Http\Controllers;

use App\Models\Desk;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;


class RoomController extends Controller
{
    public function index()
        {
            return view('index');
        }

    public function create()
        {
            return view('rooms.create');
        }

        public function store(Request $request)
        {
            // Validate the request data.
            
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'desk_quantity' => ['required', 'numeric']
            ]);

            // $id = $request->route('id');

            //create a new Room instance from the validated data. 

            $room = new Room;
            $room->name = $request->name;
            $room->desk_quantity = $request->desk_quantity;
            $room->save();

            // Create a loop using the request desk quantity as a max no. of iterations
            
            for ($i = 0; $i < $room->desk_quantity; $i++)
            {
            // Create new Desk instances with room_id as the id of the new Room instance.
                $desk = new Desk;
                $desk->room_id = $room->id;
                $desk->save();
            }

            // Redirect with flash success message.
            return redirect(RouteServiceProvider::HOME);
        }
}
