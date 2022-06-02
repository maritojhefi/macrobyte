<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->jobTitle,
            'codigoBarra' => $this->faker->ean13,
            'codigoProducto' =>  $this->faker->ean8,
            'imagen' => 'logounico.png', 
            'cantidad'=>$this->faker->numberBetween($min = 10, $max = 100),
            'precioVenta'=>$this->faker->numberBetween($min = 10, $max = 1000),
        ];
    }
}
