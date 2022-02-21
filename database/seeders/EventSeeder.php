<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\NewsImport;
use App\Models\Event;
use App\Models\AgendaTranslation;
use App\Models\Tag;
use App\Models\TagTranslation;
use Illuminate\Support\Facades\DB;
use App\Models\EventType;
use App\Models\EventTypeTranslation;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_event = (new NewsImport)->toArray(public_path('events.xlsx'));
        $content_event = $data_event[0];
        // dd($content_event);

        for ($i=2; $i < 57; $i++) { 
            $agenda = AgendaTranslation::where('name', $content_event[$i][16])->first();
            $event_type = EventTypeTranslation::where('title', $content_event[$i][8])->first();

            if($event_type == null){
                $new_event_type = new EventType();
                $new_event_type->save();
                DB::table('event_type_translations')->insert([
                    [
                        'event_type_id' => $new_event_type->id,
                        'locale' => 'ru',
                        'title' => $content_event[$i][8]
                    ],
                    [
                        'event_type_id' => $new_event_type->id,
                        'locale' => 'en',
                        'title' => $content_event[$i][19]
                    ],
                ]);
            }

            $event = new Event();
            $event->type_id = $event_type->event_type_id ?? $new_event_type->id;
            $event->agenda_id = $agenda->agenda_id ?? null;
            $event->datetimes = $content_event[$i][9].'-'.$content_event[$i][9];
            $event->date_start = Date::parse(explode('-', $content_event[$i][9])[0]);
            $event->date_end = Date::parse(explode('-', $content_event[$i][9])[0]);
            $event->access = 1;
            $event->reg_types = 1;
            $event->types = 1;
            $event->cost_types = 1;
            $event->save();

            DB::table('event_translations')->insert([
                'event_id' => $event->id,
                'locale' => 'ru',
                'title' => $content_event[$i][1],
                'description' => $content_event[$i][2],
            ]);
            DB::table('event_translations')->insert([
                'event_id' => $event->id,
                'locale' => 'en',
                'title' => $content_event[$i][12],
                'description' => $content_event[$i][13],
            ]);

            $tags_en = explode(',', $content_event[$i][17]);
            $tags_ru = explode(',', $content_event[$i][5]);
            foreach($tags_en as $key => $tag){
                if(!empty($tag)){
                    $tag_name = TagTranslation::where('name', trim($tag))->first();
                    if(is_null($tag_name)){
                        $item = new Tag();
                        $item->save();
                        $event->tags()->attach($item);
                        DB::table('tag_translations')->insert([
                            [
                                'tag_id' => $item->id,
                                'locale' => 'en',
                                'name' => Str::ucfirst(trim($tag))
                            ],
                            [
                                'tag_id' => $item->id,
                                'locale' => 'ru',
                                'name' => Str::ucfirst(trim($tags_ru[$key]))
                            ],
                        ]);
                    }else{
                        $event->tags()->attach($tag_name->tag_id);
                    }
                }
            }
        }
    }
}
