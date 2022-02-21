<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WinnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Youtube($this->faker));
        return [
            'year' => rand(1990, 2020),
            'image' => $this->faker->imageUrl('640', '320'),
            'video' => $this->faker->youtubeUri(),
            'project_id' => rand(1,3),
            'link' => $this->faker->imageUrl('640', '320'),
        ];
    }
}
