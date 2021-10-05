<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'nombre' => 'Matías',
            'apellido' => 'López',
            'username' => 'mlopeza',
            'email' => 'mlopeza23@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'nombre' => 'Alejandro ',
            'apellido' => 'araya',
            'username' => 'aaraya',
            'email' => 'aaraya3@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'nombre' => 'Matías',
            'apellido' => 'Guerrero',
            'username' => 'mguerrero',
            'email' => 'mguerrero@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '4',
            'nombre' => 'Nicolas',
            'apellido' => 'López',
            'username' => 'nlopez',
            'email' => 'nlopez@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '5',
            'nombre' => 'Enrique',
            'apellido' => 'Navarrete',
            'username' => 'enavarrete',
            'email' => 'enavarrete@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '6',
            'nombre' => 'Carolina',
            'apellido' => 'Araya',
            'username' => 'caraya',
            'email' => 'caraya@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '7',
            'nombre' => 'Alan',
            'apellido' => 'Vergara',
            'username' => 'avergara',
            'email' => 'avergara@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '8',
            'nombre' => 'Vicente',
            'apellido' => 'Pinazo',
            'username' => 'vpinazo',
            'email' => 'vpinazo@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '9',
            'nombre' => 'Patricio',
            'apellido' => 'Araya',
            'username' => 'paraya',
            'email' => 'paraya@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);
        DB::table('users')->insert([
            'id' => '10',
            'nombre' => 'Carlos',
            'apellido' => 'Alarcon',
            'username' => 'calarcon',
            'email' => 'calarcon@outlook.com',
            'password' => '12345',
            'perfil' => 'Usuario',
        ]);

    }
}
