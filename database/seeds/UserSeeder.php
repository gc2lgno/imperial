<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gabo = new User();
        $gabo->nombres = "Administrador";
        $gabo->apellidos = "Administrador";
        $gabo->cedula = "V12345678";
        $gabo->username = "admin";
        $gabo->email = "admin@gmail.com";
        $gabo->email_verified_at = now();
        $gabo->password = Hash::make('12345678');
        $gabo->save();
    }
}
