<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
