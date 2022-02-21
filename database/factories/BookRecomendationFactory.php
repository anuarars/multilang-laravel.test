<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookRecomendationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ''.$this->faker->firstName().' '.$this->faker->lastName().'',
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'occupation' => $this->faker->jobTitle(),
            'book' => $this->faker->word(),
            'link' => $this->faker->url(),
            'author' => $this->faker->word(),
            'year' => $this->faker->year()
        ];
    }
}
