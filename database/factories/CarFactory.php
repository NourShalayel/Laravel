<?php

namespace Database\Factories;

use App\Models\company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(200),
            'model'=>$this->faker->text(200),
            'color'=>$this->faker->text(200),
            'image'=>$this->faker->imageUrl,
            'price_per_day'=> $this->faker->randomNumber(2),
            'price_per_km'=> $this->faker->randomNumber(2),
            'company_id'=> company::all()->random(),
        ];
    }
}
