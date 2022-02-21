<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dateStart = $this->faker->dateTimeBetween('-20 days', ' 20 days');
        $dateEnd = $this->faker->dateTimeBetween('21 day', '30 days');
        $start = $dateStart->format('Y/m/d H:i');
        $end = $dateEnd->format('Y/m/d H:i');
        
        return [
            'datetimes' => ''.$start.' - '.$end.'',
            'date_start' => $dateStart,
            'date_end' => $dateEnd,
            'image' => $this->faker->imageUrl('640', '320'),
            'cost_types' => rand(0,2),
            'reg_types' => rand(0,2),
            'format_types' =>rand(0,2)
        ];
    }
}