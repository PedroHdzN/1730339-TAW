<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Prueba usuario',
            'email'=>'correo@correo.com',
            'password'=>Hash::make('12345678'),
            'url'=>'www.upv.com',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
        	'name'=>'Eduar Lopez',
        	'email'=>'correo1@correo.com',
        	'password'=>Hash::make('12345678'),
        	'url'=>'www.upv.com',
        	'created_at'=>date('Y-m-d H:i:s'),
        	'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
        	'name'=>'Tris',
        	'email'=>'correo2@correo.com',
        	'password'=>Hash::make('12345678'),
        	'url'=>'www.upv.com',
        	'created_at'=>date('Y-m-d H:i:s'),
        	'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
        	'name'=>'Sandra',
        	'email'=>'correo3@correo.com',
        	'password'=>Hash::make('12345678'),
        	'url'=>'www.upv.com',
        	'created_at'=>date('Y-m-d H:i:s'),
        	'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
}
