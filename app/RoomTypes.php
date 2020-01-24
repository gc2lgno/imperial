<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypes extends Model
{
    protected $table = 'room_types';

    protected $fillable =[
        'nombre',
        'detalles',
        'precio',
        'total_room',
        'services_id'
    ];

    public function rooms(){
        return $this->hasMany(Room::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
