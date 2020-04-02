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
        $admin = new User();
        $admin->nombres = "Administrador";
        $admin->apellidos = "Administrador";
        $admin->cedula = "V12345678";
        $admin->username = "admin";
        $admin->email = "admin@gmail.com";
        $admin->email_verified_at = now();
        $admin->password = Hash::make('12345678');
        $admin->save();
    }
}
