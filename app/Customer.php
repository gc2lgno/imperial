<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'rif', 'telefono', 'email'
    ];
}