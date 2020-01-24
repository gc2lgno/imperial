<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'nombre',
        'detalle'
    ];

    function room()
    {
        return $this->belongsToMany(Room::class);
    }
}
