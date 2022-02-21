<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Imports\NewsImport;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_works = (new NewsImport)->toArray(public_path('works.xlsx'));
        $content_w = $data_works[1];
        // dd($content_w);

        for ($i=2; $i < 10; $i++) { 
            $work = new Work();
            $work->project_id = 1;
            $work->year = $content_w[$i][6];
            $work->save();

            DB::table('work_translations')->insert([
                'work_id' => $work->id,
                'locale' => 'ru',
                'name' => $content_w[$i][1].' '.$content_w[$i][2],
                'work_name' => $content_w[$i][3],
                'description' => $content_w[$i][3],
            ]);
            DB::table('work_translations')->insert([
                'work_id' => $work->id,
                'locale' => 'en',
                'name' => $content_w[$i][6].' '.$content_w[$i][7],
                'work_name' => $content_w[$i][8],
                'description' => $content_w[$i][8],
            ]);

        }
        // DB::table('works')->insert([
        //     [
        //         'id' => 1,
        //         'project_id' => 1,
        //         'year' => 2021,
        //     ],
        //     [
        //         'id' => 2,
        //         'project_id' => 1,
        //         'year' => 2021,
        //     ],
        //     [
        //         'id' => 3,
        //         'project_id' => 1,
        //         'year' => 2021,
        //     ],
        //     [
        //         'id' => 4,
        //         'project_id' => 1,
        //         'year' => 2021,
        //     ],
        //     [
        //         'id' => 5,
        //         'project_id' => 1,
        //         'year' => 2021,
        //     ],
        //     [
        //         'id' => 6,
        //         'project_id' => 1,
        //         'year' => 2020,
        //     ],
        //     [
        //         'id' => 7,
        //         'project_id' => 1,
        //         'year' => 2020,
        //     ],
        //     [
        //         'id' => 8,
        //         'project_id' => 1,
        //         'year' => 2018,
        //     ],
        //     [
        //         'id' => 9,
        //         'project_id' => 1,
        //         'year' => 2018,
        //     ],
        // ]);

        // DB::table('work_translations')->insert([
        //     [
        //         'work_id' => 1,
        //         'name' => 'Sofya Pimenova',
        //         'description' => 'Interim measures in the practice of the International court of justice',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 1,
        //         'name' => 'Sofya Pimenova',
        //         'description' => 'Interim measures in the practice of the International court of justice',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 2,
        //         'name' => 'Olga Starshinova',
        //         'description' => 'Is the MPIA a real practical solution to overcome the WTO appellate body crisis?',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 2,
        //         'name' => 'Olga Starshinova',
        //         'description' => 'Is the MPIA a real practical solution to overcome the WTO appellate body crisis?',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 3,
        //         'name' => 'Marina Mayer',
        //         'description' => 'The Journey of rehabilitation
        //         in International criminal law
        //         and beyond: from sentencing goal to precondition for reconciliation',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 3,
        //         'name' => 'Marina Mayer',
        //         'description' => 'The Journey of rehabilitation
        //         in International criminal law
        //         and beyond: from sentencing goal to precondition for reconciliation',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 4,
        //         'name' => 'Ksenia Soloveva',
        //         'description' => 'Exceptio inadimplenti con-tractus in International law: dead or alive? The status of the exception in contemporary international law',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 4,
        //         'name' => 'Ksenia Soloveva',
        //         'description' => 'Exceptio inadimplenti con-tractus in International law: dead or alive? The status of the exception in contemporary international law',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 5,
        //         'name' => 'Tigran Oganesian',
        //         'description' => 'Personal dignity and carriages: conditions of transportation
        //         of prisoners in Russian literature and in the positions of the European court of human rights',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 5,
        //         'name' => 'Tigran Oganesian',
        //         'description' => 'Personal dignity and carriages: conditions of transportation
        //         of prisoners in Russian literature and in the positions of the European court of human rights',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 6,
        //         'name' => 'Alexey Ryaguzov',
        //         'description' => 'On the commercial development of space resources',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 6,
        //         'name' => 'Alexey Ryaguzov',
        //         'description' => 'On the commercial development of space resources',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 7,
        //         'name' => 'Irina Artamonova',
        //         'description' => 'Differentiation of indirect expropriation and tax measures in the practice of international investment arbitration',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 7,
        //         'name' => 'Irina Artamonova',
        //         'description' => 'Differentiation of indirect expropriation and tax measures in the practice of international investment arbitration',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 8,
        //         'name' => 'Egor Fedorov',
        //         'description' => 'Srebrenica, Haiti, where next? Future of the dispute settlement for Private law claims brought against the United Nations',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 8,
        //         'name' => 'Egor Fedorov',
        //         'description' => 'Srebrenica, Haiti, where next? Future of the dispute settlement for Private law claims brought against the United Nations',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'work_id' => 9,
        //         'name' => 'Alexander Borgoyakov',
        //         'description' => 'Fair regime and security of foreign investments in international law',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'work_id' => 9,
        //         'name' => 'Alexander Borgoyakov',
        //         'description' => 'Fair regime and security of foreign investments in international law',
        //         'locale' => 'en'
        //     ],
        // ]);
    }
}