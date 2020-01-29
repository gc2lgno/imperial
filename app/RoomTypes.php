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
        'total_room'
    ];

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
