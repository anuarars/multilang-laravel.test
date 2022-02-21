<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $news = DB::connection('mysql_base')->table('news')->get();
        // $news_translations = DB::connection('mysql_base')->table('news_translations')->get();

        // foreach ($news as $item) {
        //     DB::connection('mysql')->table('news')->insert([
        //         'id' => $item->id,
        //         'link'=> $item->link,
        //         'date' => $item->date,
        //         'created_at' => $item->created_at,
        //     ]);
        // }

        // foreach ($news_translations as $newsItem) {
        //     DB::connection('mysql')->table('news_translations')->insert([
        //         'id' => $newsItem->id,
        //         'news_id'=> $newsItem->news_id,
        //         'title' => $newsItem->title,
        //         'content' => $newsItem->content,
        //         'locale' => $newsItem->locale,
        //     ]);
        // }


        \App\Models\News::factory(10)->create()
        ->each(function ($news){
            $faker_ru = Faker::create('ru_RU');

            DB::table('news_translations')->insert([
                'news_id' => $news->id,
                'title' => $faker_ru->realText(60, 2),
                'content' => $faker_ru->realText(1000, 2),
                'locale' => 'ru'
            ]);

            $faker_en = Faker::create('en_US');
            DB::table('news_translations')->insert([
                'news_id' => $news->id,
                'title' => $faker_en->realText(60, 2),
                'content' => $faker_en->realText(1000, 2),
                'locale' => 'en'
            ]);

        });
    }
}
