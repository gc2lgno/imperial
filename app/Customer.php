<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'rif', 'telefono', 'email'
    ];

    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
