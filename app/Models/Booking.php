<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function desk()
    {
        return $this->hasOne(Desk::class, 'desk_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
