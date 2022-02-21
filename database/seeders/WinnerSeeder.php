<?php

namespace Database\Seeders;

use App\Models\Winner;
use App\Models\Work;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Imports\NewsImport;

class WinnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data_winners = (new NewsImport)->toArray(public_path('winners.xlsx'));
        $content = $data_winners[0];

        for ($i=2; $i < 8; $i++) { 
            $winner = new Winner();
            $winner->video = $content[$i][7];
            $winner->year = $content[$i][4];
            $winner->project_id = 1;
            $winner->save();

            DB::table('winner_translations')->insert([
                'winner_id' => $winner->id,
                'name' => $content[$i][1].' '.$content[$i][2],
                'locale' => 'ru',
                'name' => $content[$i][1].' '.$content[$i][2],
                'description' => $content[$i][3],
            ]);
            DB::table('winner_translations')->insert([
                'winner_id' => $winner->id,
                'name' => $content[$i][8].' '.$content[$i][9],
                'locale' => 'en',
                'short_description' => $content[$i][12],
                'description' => $content[$i][12],
            ]);

        }
        // $faker = Faker::create('en_US');

        // DB::table('winners')->insert([
        //     [
        //         'id' => 1,
        //         'year' => 2020,
        //         'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/wi1.png',
        //         'video' => 'https://www.youtube.com/watch?v=RjORBu5Di-M',
        //         'project_id' => 1,
        //         'link' => 'https://iclrc.ru/files/pages/award/4/Trofimchuk.pdf',
        //     ],
        //     [
        //         'id' => 2,
        //         'year' => 2019,
        //         'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/wi2.png',
        //         'video' => 'https://www.youtube.com/watch?v=Dho9Ggi3kGI',
        //         'project_id' => 1,
        //         'link' => 'https://iclrc.ru/files/pages/award/4/Magomedova.pdf',
        //     ],
        //     [
        //         'id' => 3,
        //         'year' => 2019,
        //         'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/wi3.png',
        //         'video' => 'https://www.youtube.com/watch?v=Dho9Ggi3kGI',
        //         'project_id' => 1,
        //         'link' => 'https://iclrc.ru/files/pages/award/4/Kantur.pdf',
        //     ],
        //     [
        //         'id' => 4,
        //         'year' => 2018,
        //         'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/wi4.png',
        //         'video' => 'https://www.youtube.com/watch?v=Dho9Ggi3kGI',
        //         'project_id' => 1,
        //         'link' => 'https://iclrc.ru/files/pages/award/4/Vyalkov.pdf',
        //     ],
        //     [
        //         'id' => 5,
        //         'year' => 2019,
        //         'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/wi5.png',
        //         'video' => 'https://www.youtube.com/watch?v=Dho9Ggi3kGI',
        //         'project_id' => 1,
        //         'link' => 'https://iclrc.ru/files/pages/award/4/Petrenko.pdf',
        //     ],
        //     [
        //         'id' => 6,
        //         'year' => 2018,
        //         'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/wi6.png',
        //         'video' => 'https://www.youtube.com/watch?v=Dho9Ggi3kGI',
        //         'project_id' => 1,
        //         'link' => 'https://iclrc.ru/files/pages/award/4/Vaypan.pdf',
        //     ],
        // ]);

        // DB::table('winner_translations')->insert([
        //     [
        //         'winner_id' => 1,
        //         'name' => 'Vladimir Trofimchuk',
        //         'short_description' => 'Manus manum lavat: can cor-ruption be considered a state-imposed trade barrier?',
        //         'description' => 
        //             'nternational policy advisor to Deputy minister of transport. Holds a Master of laws from the University of Cambridge (2014) and Bachelor of arts with honours from MGIMO University (2013). Was an exchange student at Sciences Po Paris in France.
        //             ',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'winner_id' => 1,
        //         'name' => 'Vladimir Trofimchuk',
        //         'short_description' => 'Manus manum lavat: can cor-ruption be considered a state-imposed trade barrier?',
        //         'description' => 
        //             'nternational policy advisor to Deputy minister of transport. Holds a Master of laws from the University of Cambridge (2014) and Bachelor of arts with honours from MGIMO University (2013). Was an exchange student at Sciences Po Paris in France.
        //             ',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'winner_id' => 2,
        //         'name' => 'Olga Magomedova',
        //         'short_description' => 'Performance Requirements: <br> a closer look at the nature of <br> the controversial concept',
        //         'description' => 
        //             ' Holds an Bachelor of laws (2017) and a Master of laws with honours from MGIMO University (2019). She won national and international essay competitions. She has a number of publications on International investment law
        //             ',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'winner_id' => 2,
        //         'name' => 'Olga Magomedova',
        //         'short_description' => 'Performance Requirements: <br> a closer look at the nature of <br> the controversial concept',
        //         'description' => 
        //             ' Holds an Bachelor of laws (2017) and a Master of laws with honours from MGIMO University (2019). She won national and international essay competitions. She has a number of publications on International investment law
        //             ',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'winner_id' => 3,
        //         'name' => 'Ruslan Kantur',
        //         'short_description' => 'International legal grounds and legal character of law-making powers of the UN transitional administrations',
        //         'description' => 
        //             'Employee of the Ministry of foreign affairs of the Russia, graduated from the Interna-tional law school of MGIMO University (2017), has a number of publications on International criminal law, International humanitarian law, the Law of international organizations
        //             ',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'winner_id' => 3,
        //         'name' => 'Ruslan Kantur',
        //         'short_description' => 'International legal grounds and legal character of law-making powers of the UN transitional administrations',
        //         'description' => 
        //             'Employee of the Ministry of foreign affairs of the Russia, graduated from the Interna-tional law school of MGIMO University (2017), has a number of publications on International criminal law, International humanitarian law, the Law of international organizations
        //             ',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'winner_id' => 4,
        //         'name' => 'Alexey Vyalkov',
        //         'short_description' => 'The role of equity in the assess-ment of damages under custom: where are Diallo and the Arctic sunrise taking the law?',
        //         'description' => 
        //             'Associate at Clifford chance. Holds a Bachelor of laws from Lomonosov MSU (2015) and a Magister juris from Oxford University (2016). Не was a Hill scholar and awarded the Volterra Fietta prize for Interna-tional dispute settlement and the Gillis Wetter memorial prize for international arbitration
        //             ',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'winner_id' => 4,
        //         'name' => 'Alexey Vyalkov',
        //         'short_description' => 'The role of equity in the assess-ment of damages under custom: where are Diallo and the Arctic sunrise taking the law?',
        //         'description' => 
        //             'Associate at Clifford chance. Holds a Bachelor of laws from Lomonosov MSU (2015) and a Magister juris from Oxford University (2016). Не was a Hill scholar and awarded the Volterra Fietta prize for Interna-tional dispute settlement and the Gillis Wetter memorial prize for international arbitration
        //             ',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'winner_id' => 5,
        //         'name' => 'Alexey Petrenko',
        //         'short_description' => ' Economic sanctions and challenge of these in the WTO in the context of the national security exceptions',
        //         'description' => 
        //             'Doctoral student at the University of Göttingen and a graduate of the Immanuil Kant Baltic federal university in Kaliningrad and University of Göttingen in Germany
        //             ',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'winner_id' => 5,
        //         'name' => 'Alexey Petrenko',
        //         'short_description' => 'Economic sanctions and challenge of these in the WTO in the context of the national security exceptions',
        //         'description' => 
        //             'Doctoral student at the University of Göttingen and a graduate of the Immanuil Kant Baltic federal university in Kaliningrad and University of Göttingen in Germany
        //             ',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'winner_id' => 6,
        //         'name' => 'Grigory Vaypan',
        //         'short_description' => '"To do a great right, do a little wrong": the concept of propor-tionality in contemporary international law',
        //         'description' => 
        //             'The head of constitutional litigation practice of the Institute of law and public policy and a graduate of the Lomonosov MSU and Harvard law school
        //             ',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'winner_id' => 6,
        //         'name' => 'Grigory Vaypan',
        //         'short_description' => '"To do a great right, do a little wrong": the concept of propor-tionality in contemporary international law',
        //         'description' => 
        //             'The head of constitutional litigation practice of the Institute of law and public policy and a graduate of the Lomonosov MSU and Harvard law school
        //             ',
        //         'locale' => 'ru'
        //     ],
        // ]);

    }
}
