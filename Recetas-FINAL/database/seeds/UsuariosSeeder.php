<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //seeder para cargar usuarios
    public function run()
    {
        $user = User::create([
            'name' => 'Mario',
            'email' => 'correo@correo.com',
            'password' => bcrypt('12345678'),
            'url' => 'https://mario.com',
        ]);
           
        $user2 = User::create([
            'name' => 'ivan',
            'email' => 'ivan@correo.com',
            'password' => bcrypt('12345678'),
            'url' => 'https://ivan.com',
        ]);
    }
}
