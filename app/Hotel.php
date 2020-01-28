<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nombre',
        'rif',
        'direccion',
        'telefono',
        'hotel_status_id',
        'pisos'
    ];

    public function status()
    {
        return $this->belongsTo(HotelStatus::class, 'hotel_status_id');
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
