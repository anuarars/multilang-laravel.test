<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo' => $this->faker->imageUrl('640', '320'),
            'announcement_competition' => $this->faker->dateTime(),
            'announcement_result' => $this->faker->dateTime(),
        ];
    }
}
