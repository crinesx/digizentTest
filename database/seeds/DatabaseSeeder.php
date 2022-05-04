<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('usuarios')->insert([
            'nombre' => 'Hugo',
            'apellido' => 'apellido',
            'email' => 'correo@correo.com',
            'birthdate' => '05/05/2000'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Paco',
            'apellido' => 'apellido2',
            'email' => 'correo3@correo.com',
            'birthdate' => '05/05/2000'
        ]);
        
        DB::table('usuarios')->insert([
            'nombre' => 'luis',
            'apellido' => 'apellido3',
            'email' => 'correo3@correo.com',
            'birthdate' => '05/05/2000'
        ]);
        //-------------------direcciones
        DB::table('direcciones')->insert([
            'calle' => 'calle 1',
            'ciudad' => 'puebla',
            'estado' => 'puebla',
            'priority' => 1,
            'usuarios_id' => 1,
        ]);
        DB::table('direcciones')->insert([
            'calle' => 'calle 2',
            'ciudad' => 'puebla',
            'estado' => 'puebla',
            'priority' => 0,
            'usuarios_id' => 1,
        ]);
        DB::table('direcciones')->insert([
            'calle' => 'calle 3',
            'ciudad' => 'puebla',
            'estado' => 'puebla',
            'priority' => 0,
            'usuarios_id' => 2,
        ]);
        DB::table('direcciones')->insert([
            'calle' => 'calle 4',
            'ciudad' => 'puebla',
            'estado' => 'puebla',
            'priority' => 1,
            'usuarios_id' => 2,
        ]);
        DB::table('direcciones')->insert([
            'calle' => 'calle 5',
            'ciudad' => 'puebla',
            'estado' => 'puebla',
            'priority' => 1,
            'usuarios_id' => 3,
        ]);
        DB::table('direcciones')->insert([
            'calle' => 'calle 6',
            'ciudad' => 'puebla',
            'estado' => 'puebla',
            'priority' => 0,
            'usuarios_id' => 3,
        ]);
    }
}
