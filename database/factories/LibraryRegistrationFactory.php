<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ticket' => $this->faker->word(),
            'name' => $this->faker->name,
            'surname' => $this->faker->lastName(),
            'date_visit' => $this->faker->date(),
            'time_visit' => $this->faker->time(),
            'books' => $this->faker->word(),
            'confirmed' => rand(0,1)
        ];
    }
}
