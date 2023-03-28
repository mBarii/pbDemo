<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'prodName'=>fake()->colorName(),
            'quantity'=>fake()->randomDigit(),
            'price'=>fake()->numberBetween($min = 1000, $max = 9000)
        ];
    }
}
