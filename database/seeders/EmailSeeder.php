<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $emails = DB::connection('mysql_base')->table('emails')->get();
        // $email_translations = DB::connection('mysql_base')->table('email_translations')->get();

        // foreach ($emails as $email) {
        //     DB::connection('mysql')->table('emails')->insert([
        //         'id' => $email->id,
        //         'type'=> $email->type,
        //     ]);
        // }

        // foreach ($email_translations as $email_translation) {
        //     DB::connection('mysql')->table('email_translations')->insert([
        //         'id' => $email_translation->id,
        //         'email_id'=> $email_translation->email_id,
        //         'locale' => $email_translation->locale,
        //         'mail_text' => $email_translation->mail_text
        //     ]);
        // }
    }
}
