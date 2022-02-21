<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $recommendations = DB::connection('mysql_base')->table('books_recommendations')->get();

        // foreach ($recommendations as $recommendation) {
        //     DB::connection('mysql')->table('book_recomendations')->insert([
        //         'id' => $recommendation->id,
        //         'name'=> $recommendation->name,
        //         'email' => $recommendation->email,
        //         'phone' => $recommendation->phone,
        //         'occupation' =>$recommendation->occupation,
        //         'book' => $recommendation->book,
        //         'author' => $recommendation->author,
        //         'link' => $recommendation->link,
        //         'year' => $recommendation->year,
        //         'created_at' => $recommendation->created_at
        //     ]);
        // }
    }
}
