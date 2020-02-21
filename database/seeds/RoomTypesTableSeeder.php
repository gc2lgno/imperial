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

        $rooms = [
            [
                'nombre' => 'MATRIMONIAL',
                'detalles' => 'Habitación con 1 cama Matrimonial',
                'price' => 300000,
                'total_room' => 2
            ],
            [
                'nombre' => 'DOBLE',
                'detalles' => 'Habitación con 1 cama Matrimonial y 1 individual',
                'price' => 350000,
                'total_room' => 3
            ],
            [
                'nombre' => 'TRIPLE',
                'detalles' => 'Habitación con 1 cama Matrimonial y 2 individuales',
                'price' => 350000,
                'total_room' => 4
            ],
            [
                'nombre' => 'CUADRUPLE',
                'detalles' => 'Habitación con 4 camas individuales',
                'price' => 450000,
                'total_room' => 4
            ]
        ];

        $this->command->getOutput()->progressStart(count($rooms));

        foreach ($rooms as $key) {
            RoomTypes::create([
                'nombre'        => $key['nombre'],
                'detalles'      => $key['detalles'],
                'precio'        => $key['price'],
                'total_room'    => $key['total_room']
            ]);
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
