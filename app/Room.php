<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'hotel_id',
        'numero',
        'ubicacion',
        'room_type_id',
        'room_status',
        'services_id'
    ];

    public function hotel(){
        return $this->belongsTo(Hotel::class, 'room_types_id');
    }

    function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
