<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Language::factory(10)->create()
        ->each(function ($language){
            $faker_ru = Faker::create('ru_RU');

            DB::table('language_translations')->insert([
                'language_id' => $language->id,
                'name' => $faker_ru->word(),
                'locale' => 'ru'
            ]);

            $faker_en = Faker::create('en_US');
            DB::table('language_translations')->insert([
                'language_id' => $language->id,
                'name' => $faker_en->word(),
                'locale' => 'en'
            ]);

        });
    }
}