<?php

namespace Database\Seeders;

use App\Models\EventGallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MigrationSeeder extends Seeder
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


        $library_tickets = DB::connection('mysql_base')->table('library_tickets')->get();

        foreach ($library_tickets as $library_ticket) {
            DB::connection('mysql')->table('library_tickets')->insert([
                'id' => $library_ticket->id,
                'ticket'=> $library_ticket->ticket,
                'surname' => $library_ticket->surname,
                'name' => $library_ticket->name,
                'email' => $library_ticket->email,
                'phone' => $library_ticket->phone,
                'occupation' => $library_ticket->occupation,
                'position' => $library_ticket->position,
                'updated_at' => $library_ticket->updated_at,
                'created_at' => $library_ticket->created_at,
            ]);
        }

        $event_types = DB::connection('mysql_base')->table('event_types')->get();
        $event_type_translations = DB::connection('mysql_base')->table('event_type_translations')->get();

        foreach ($event_types as $event_type) {
            if($event_type->id < 10){
                DB::connection('mysql')->table('event_types')->insert([
                    'id' => $event_type->id,
                    'image'=> 'https://iclrc.ru'.$event_type->image,
                    'color' => $event_type->color,
                ]);
            }
        }

        foreach ($event_type_translations as $event_type_translation) {
            if($event_type_translation->event_type_id < 10){
                DB::connection('mysql')->table('event_type_translations')->insert([
                    'id' => $event_type_translation->id,
                    'event_type_id'=> $event_type_translation->event_type_id,
                    'locale' => $event_type_translation->locale,
                    'title' => $event_type_translation->title,
                ]);
            }
        }


        // $events = DB::connection('mysql_base')->table('events')->get();
        // $event_translations = DB::connection('mysql_base')->table('event_translations')->get();

        // foreach ($events as $event) {
        //     $galleryItems = json_decode($event->gallery, true);
        //     if($galleryItems != null){
        //         foreach($galleryItems as $item){
        //             EventGallery::create([
        //                 'event_id' => $event->id,
        //                 'url' => 'https://iclrc.ru'.$item
        //             ]);
        //         }
        //     }
            
        //     DB::connection('mysql')->table('events')->insert([
        //         'id' => $event->id,
        //         'type_id'=> $event->type_id,
        //         'datetimes' => date('Y/m/d 00:00', strtotime($event->date)).'-'.date('Y/m/d 00:00', strtotime($event->date_end)),
        //         'status' =>$event->status,
        //         'speakers' => $event->speakers,
        //         'participants' => $event->participants,
        //         'questions' => $event->questions,
        //         'preview_sm' => $event->preview_sm,
        //         'image' => is_null($event->preview_lg) ? null : 'https://iclrc.ru/'.$event->preview_lg,
        //         'wide_preview' => $event->wide_preview,
        //         'registration_needed' => $event->registration_needed,
        //         'cost' => $event->cost,
        //         'gallery' => $event->gallery,
        //         'reg_types' => 1,
        //         'format_types' => 2,
        //         'created_at' => $event->created_at,
        //         'updated_at' => $event->updated_at,
        //     ]);
        // }

        // foreach ($event_translations as $event_translation) {
        //     DB::connection('mysql')->table('event_translations')->insert([
        //         'id' => $event_translation->id,
        //         'event_id'=> $event_translation->event_id,
        //         'locale' => $event_translation->locale,
        //         'title' => $event_translation->title,
        //         'description' => $event_translation->description,
        //         // 'position' => $event_translation->position,
        //     ]);
        // }




        $recommendations = DB::connection('mysql_base')->table('books_recommendations')->get();

        foreach ($recommendations as $recommendation) {
            DB::connection('mysql')->table('book_recomendations')->insert([
                'id' => $recommendation->id,
                'name'=> $recommendation->name,
                'email' => $recommendation->email,
                'phone' => $recommendation->phone,
                'occupation' =>$recommendation->occupation,
                'book' => $recommendation->book,
                'author' => $recommendation->author,
                'link' => $recommendation->link,
                'year' => $recommendation->year,
                'created_at' => $recommendation->created_at
            ]);
        }


        $emails = DB::connection('mysql_base')->table('emails')->get();
        $email_translations = DB::connection('mysql_base')->table('email_translations')->get();

        foreach ($emails as $email) {
            DB::connection('mysql')->table('emails')->insert([
                'id' => $email->id,
                'type'=> $email->type,
            ]);
        }

        foreach ($email_translations as $email_translation) {
            DB::connection('mysql')->table('email_translations')->insert([
                'id' => $email_translation->id,
                'email_id'=> $email_translation->email_id,
                'locale' => $email_translation->locale,
                'mail_text' => $email_translation->mail_text
            ]);
        }
    }
}
