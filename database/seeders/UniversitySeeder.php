<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\University::factory(10)->create()
        ->each(function ($university){
            $faker_ru = Faker::create('ru_RU');

            DB::table('university_translations')->insert([
                'university_id' => $university->id,
                'name' => $faker_ru->word(),
                'locale' => 'ru'
            ]);

            $faker_en = Faker::create('en_US');
            DB::table('university_translations')->insert([
                'university_id' => $university->id,
                'name' => $faker_en->word(),
                'locale' => 'en'
            ]);

        });

        \App\Models\Degree::factory(10)->create()
        ->each(function ($degree){
            $faker_ru = Faker::create('ru_RU');

            DB::table('degree_translations')->insert([
                'degree_id' => $degree->id,
                'name' => $faker_ru->word(),
                'locale' => 'ru'
            ]);

            $faker_en = Faker::create('en_US');
            DB::table('degree_translations')->insert([
                'degree_id' => $degree->id,
                'name' => $faker_en->word(),
                'locale' => 'en'
            ]);

        });
    }
}
