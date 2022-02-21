<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediabankGalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Youtube($this->faker));
        $type = ['video', 'image'];
        $url = [$this->faker->youtubeUri(), $this->faker->imageUrl('640', '320')];
        $number = rand(0,1);
        return [
            'type' => $type[$number],
            'url' => $url[$number]
        ];
    }
}