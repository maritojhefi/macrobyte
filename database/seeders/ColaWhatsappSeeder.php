<?php

namespace Database\Seeders;

use App\Models\ColaWhatsapp;
use Illuminate\Database\Seeder;

class ColaWhatsappSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ColaWhatsapp::truncate();
        ColaWhatsapp::create([
            'user_id'=>1,
            'atendiendo'=>1,
           
        ]);
        ColaWhatsapp::create([
            'user_id'=>3,
            'atendiendo'=>1,
           
        ]);
        
    }
}
