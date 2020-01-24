<?php

use App\Hotel;
use App\HotelStatus;
use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imperial = new Hotel();
        $imperial->nombre = "Hotel Imperial";
        $imperial->rif = "J294253474";
        $imperial->direccion = "Avenida Casa de Zinc, antiguo Pepeganga";
        $imperial->telefono = "02473413561";
        $imperial->hotel_status_id = HotelStatus::first()->id;
        $imperial->save();
    }
}
