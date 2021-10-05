<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opciones')->insert([
            'id' => '1',
            'ruta' => 'index',
            'crud' => 'users',
        ]);

        DB::table('opciones')->insert([
            'id' => '2',
            'ruta' => 'add',
            'crud' => 'users',
        ]);

        DB::table('opciones')->insert([
            'id' => '3',
            'ruta' => 'edit',
            'crud' => 'users',
        ]);

        DB::table('opciones')->insert([
            'id' => '4',
            'ruta' => 'index',
            'crud' => 'anotaciones',
        ]);

        DB::table('opciones')->insert([
            'id' => '5',
            'ruta' => 'add',
            'crud' => 'anotaciones',
        ]);

        DB::table('opciones')->insert([
            'id' => '6',
            'ruta' => 'edit',
            'crud' => 'anotaciones',
        ]);

        DB::table('opciones')->insert([
            'id' => '7',
            'ruta' => 'index',
            'crud' => 'permisos',
        ]);

        DB::table('opciones')->insert([
            'id' => '8',
            'ruta' => 'add',
            'crud' => 'permisos',
        ]);

        DB::table('opciones')->insert([
            'id' => '9',
            'ruta' => 'edit',
            'crud' => 'permisos',
        ]);
    }
}
