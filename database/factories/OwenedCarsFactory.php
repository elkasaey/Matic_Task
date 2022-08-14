<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owened_cars>
 */
class OwenedCarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          "user_id"=>,
          "model"=>fake()->word(),
          "body_number"=>fake()->isbn13(),
          "motor_number"=>fake()->isbn10(),
          "color"=>fake()->colorName(),
          "model_year"=> fake()->year($max = 'now')
        ];
    }
}
