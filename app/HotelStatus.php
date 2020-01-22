<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelStatus extends Model
{
    protected $table = 'hotel_status';

    public function hotel()
    {
        return $this->hasOne(Hotel::class);
    }
}
