<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car_maintainance>
 */
class Car_maintainanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      return [
        "car_id"=>\App\Models\Owened_cars::pluck('id')->random(),
        "maintainance_type_id"=>\App\Models\Maintenance_type::pluck('id')->random(),
        "maintainance_date"=>fake()->date(),
      ];
    }
}
