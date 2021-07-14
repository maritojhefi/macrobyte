<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();
        Rol::create([
            'nombre'=>"invitado",
            'detalle'=>"Rol por defecto",
           
        ]);
        Rol::create([
           'nombre'=>"miembro",
           'detalle'=>"Rol con privilegios basicos",
          
       ]);
       Rol::create([
        'nombre'=>"administrador",
        'detalle'=>"Rol con acceso total al sistema",
       
    ]);
    }
}
