<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'roomID'=>fake()->randomDigit(),
            'roomDescription'=>fake()->catchPhrase(),
            'roomCapacity'=>fake()->numberBetween($min = 1, $max = 10),
            'dateFrom'=>fake()->date($format = 'Y-m-d', $max = 'now'),
            'dateTo'=>fake()->dateTimeBetween($startDate = '-5 years', $endDate = 'now', $timezone = null),
            ];
    }
}
