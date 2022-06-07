<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Seeders\RolSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Product::factory(10000)->create();
        $this->call(RolSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ColaWhatsappSeeder::class);
    }
}
