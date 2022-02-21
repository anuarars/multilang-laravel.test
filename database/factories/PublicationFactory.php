<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'materials' => $this->faker->text(),
            'agenda_id' => rand(1,8),
            'image' => $this->faker->imageUrl('640', '320')
        ];
    }
}
