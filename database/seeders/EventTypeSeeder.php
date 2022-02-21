<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $event_types = DB::connection('mysql_base')->table('event_types')->get();
        // $event_type_translations = DB::connection('mysql_base')->table('event_type_translations')->get();

        // foreach ($event_types as $event_type) {
        //     DB::connection('mysql')->table('event_types')->insert([
        //         'id' => $event_type->id,
        //         'image'=> $event_type->image,
        //         'color' => $event_type->color,
        //     ]);
        // }

        // foreach ($event_type_translations as $event_type_translation) {
        //     DB::connection('mysql')->table('event_type_translations')->insert([
        //         'id' => $event_type_translation->id,
        //         'event_type_id'=> $event_type_translation->event_type_id,
        //         'locale' => $event_type_translation->locale,
        //         'title' => $event_type_translation->title,
        //     ]);
        // }
    }
}
