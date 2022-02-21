<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => rand(0,1),
            'victory_year' => $this->faker->year(),
            'interview' => $this->faker->url(),
            'works_link' => $this->faker->url(),
            'image' => $this->faker->imageUrl('640', '320'),
            'cv' => $this->faker->imageUrl('640', '320'),
            'articles' => $this->faker->word(),
        ];
    }
}
