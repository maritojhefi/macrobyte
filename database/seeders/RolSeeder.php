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
           
        ],
        [
            'nombre'=>"miembro",
            'detalle'=>"Rol con privilegios basicos",
           
        ],
        [
            'nombre'=>"administrador",
            'detalle'=>"Rol con acceso total",
           
        ],
        [
            'nombre'=>"vendedor",
            'detalle'=>"Rol con vista a venta de productos",
           
        ],
        [
            'nombre'=>"admin-pos",
            'detalle'=>"Rol con acceso a administracion de su tienda",
           
        ]);
      
    }
}
