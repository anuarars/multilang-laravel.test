<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryTicketsFactory extends Factory
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
            'email' =>$this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'occupation' => $this->faker->jobTitle(),
            'position' => rand(1,6),
        ];
    }
}
