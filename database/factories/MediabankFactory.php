<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediabankFactory extends Factory
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
            'description' => $this->faker->word(),
            'youtube' => $this->faker->youtubeUri(),
            'project_id' => rand(1,5),
            'event_id' => rand(1,10)
        ];
    }
}