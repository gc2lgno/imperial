<?php

use App\RoomTypes;
use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matrimonial = new RoomTypes();
        $matrimonial->nombre = "MATRIMONIAL";
        $matrimonial->detalles = "Habitación con 1 cama Matrimonial";
        $matrimonial->precio = 300000;
        $matrimonial->total_room = 2;
        $matrimonial->save();

        $doble = new RoomTypes();
        $doble->nombre = "DOBLE";
        $doble->detalles = "Habitación con 1 cama Matrimonial y 1 individual";
        $doble->precio = 350000;
        $doble->total_room = 3;
        $doble->save();

        $triple = new RoomTypes();
        $triple->nombre = "TRIPLE";
        $triple->detalles = "Habitación con 1 cama Matrimonial y 2 individuales";
        $triple->precio = 350000;
        $triple->total_room = 4;
        $triple->save();

        $cuadruple = new RoomTypes();
        $cuadruple->nombre = "CUADRUPLE";
        $cuadruple->detalles = "Habitación con 4 camas individuales";
        $cuadruple->precio = 450000;
        $cuadruple->total_room = 4;
        $cuadruple->save();
    }
}
