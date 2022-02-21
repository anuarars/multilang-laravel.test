<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PublicationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PublicationType::factory(4)->create()
        ->each(function($publication_type){
            $data_ru =[
                '1' => 'Дайджест',
                '2' => 'Аналитическая справка,',
                '3' => 'Информационная справка',
                '4' => 'Сборник',
            ];

            $data_en =[
                '1' => 'Digest',
                '2' => 'Analytics',
                '3' => 'Information',
                '4' => 'Collection',
            ];

            DB::table('publication_type_translations')->insert([
                'publication_type_id' => $publication_type->id,
                'locale' => 'ru',
                'name' => $data_ru[$publication_type->id]
            ]);

            DB::table('publication_type_translations')->insert([
                'publication_type_id' => $publication_type->id,
                'locale' => 'en',
                'name' => $data_en[$publication_type->id]
            ]);
        });
    }
}
