<?php

namespace Database\Seeders;

use App\Models\CurrentEvent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrentEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = CurrentEvent::create([
            'event_id' => '1',
        ]);

        DB::table('current_event_translations')->insert([
            'current_event_id' => $item->id,
            'description' => 'test-ru',
            'locale' => 'ru'
        ]);

        DB::table('current_event_translations')->insert([
            'current_event_id' => $item->id,
            'description' => 'test-eng',
            'locale' => 'en'
        ]);
    }
}
