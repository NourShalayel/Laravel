<?php

namespace Database\Factories;

use App\Models\company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\company>
 */
class CompanyFactory extends Factory
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
            'code'=>$this->faker->text(200),
            'contact'=>$this->faker->text(200),
            'image'=>$this->faker->imageUrl,
            'email'=> $this->faker->text(200),
            'address'=> $this->faker->text(200),
            'age'=> $this->faker->randomNumber(2),
            'description'=>$this->faker->text(200),
        ];
    }
}
