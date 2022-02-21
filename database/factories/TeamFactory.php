<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position' => rand(0,10),
            'email' => $this->faker->email,
            'image' => $this->faker->imageUrl('640', '320'),
        ];
    }
}
