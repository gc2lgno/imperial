<?php

use App\HotelStatus;
use Illuminate\Database\Seeder;

class HotelStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activo = new HotelStatus();
        $activo->nombre = "ACTIVO";
        $activo->descripcion = "Hotel en funcionamiento";
        $activo->save();

        $inactivo = new HotelStatus();
        $inactivo->nombre = "INACTIVO";
        $inactivo->descripcion = "Hotel fuera de servicio";
        $inactivo->save();
    }
}
