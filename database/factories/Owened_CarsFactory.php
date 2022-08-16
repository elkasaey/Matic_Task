<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owened_cars>
 */
class Owened_CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          "model"=>fake()->word(),
          "body_number"=>fake()->isbn13(),
          "motor_number"=>fake()->isbn10(),
          "color"=>fake()->colorName(),
          "model_year"=> fake()->year($max = 'now')
        ];
    }
}
