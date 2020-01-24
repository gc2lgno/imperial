<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aire = new Service();
        $aire->nombre = "Aire Acondicionado";
        $aire->detalle = "Aire Acondicionado";
        $aire->save();

        $nevera = new Service();
        $nevera->nombre = "Nevera";
        $nevera->detalle = "Nevera ejecutiva";
        $nevera->save();

        $agua = new Service();
        $agua->nombre = "Agua Caliente";
        $agua->detalle = "Agua caliente para la ducha.";
        $agua->save();
    }
}
