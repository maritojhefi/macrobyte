<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'=>"Mario Jheferson Cotave Rodriguez",
            'email'=>"mario.cotave@macrobyte.site",
            'password'=>"jhefi123",
            'telf'=>"+59175140175",
            'rol_id'=>3,
            'empresa_id'=>1,
           
        ]);
        User::create([
            'name'=>"Mario Ezequiel Sanchez",
            'email'=>"mario.sanchez@macrobyte.site",
            'password'=>"sanchez123",
            'telf'=>"60279039",
            'rol_id'=>3,
            'empresa_id'=>1,
           
        ]);
        User::create([
            'name'=>"Rodrigo Villa",
            'email'=>"freddy.angulo@macrobyte.site",
            'password'=>"angulo123",
            'telf'=>"+59175141260",
            'rol_id'=>2,
            'empresa_id'=>1,
           
        ]);
        User::create([
            'name'=>"Ervin",
            'email'=>"fabricio.lizondo@macrobyte.site",
            'password'=>"lizondo123",
            'telf'=>"+59169887995",
            'rol_id'=>3,
            'empresa_id'=>1,
           
        ]);
    }
}
