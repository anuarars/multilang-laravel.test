<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ['person', 'organization'];
        return [
            'type' => $types[rand(0,1)]
        ];
    }
}
