<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'event_id' => 1,
            'agenda_id' => 1,
            'publication_id' => 1,
            'news_id'=> 1
        ];

        DB::table('main_pages')->insert($data);
    }
}
