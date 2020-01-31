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
        'room_status'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomTypes::class, 'room_type_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'rooms_services');
    }

    public function booking(){
        return $this->belongsTo(Booking::class);
    }
}
