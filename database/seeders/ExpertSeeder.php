<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use Illuminate\Support\Str;

class ExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'id' => 1
        ]);
        DB::table('tag_translations')->insert([
            [
                'tag_id' => 1,
                'name' => 'Библиотека',
                'locale' => 'ru'
            ],
            [
                'tag_id' => 1,
                'name' => 'Library',
                'locale' => 'en'
            ],
        ]);

        $tags = array(
            0 => array('ru' => 'арбитраж', 'en' => 'arbitration'),
            1 => array('ru' => 'арбитражные управляющие', 'en' => 'insolvency officers'),
            2 => array('ru' => 'банкротство', 'en' => 'bankruptcy'),
            3 => array('ru' => 'библиотека', 'en' => 'library'),
            4 => array('ru' => 'вакцинация', 'en' => 'vaccination'),
            5 => array('ru' => 'ВТО', 'en' => 'WTO'),
            6 => array('ru' => 'Великобритания', 'en' => 'UK'),
            7 => array('ru' => 'гендер', 'en' => 'gender'),
            8 => array('ru' => 'день международного права', 'en' => 'international law day'),
            9 => array('ru' => 'доказательства', 'en' => 'evidence'),
            10 => array('ru' => 'ЕАЭС', 'en' => 'EAEU'),
            11 => array('ru' => 'ЕС', 'en' => 'EU'),
            12 => array('ru' => 'ЕСПЧ', 'en' => 'ECHR'),
            13 => array('ru' => 'зелёные финансы', 'en' => 'green finance'),
            14 => array('ru' => 'Китай', 'en' => 'China'),
            15 => array('ru' => 'комментарий', 'en' => 'commentary'),
            16 => array('ru' => 'конкурс', 'en' => 'competition'),
            17 => array('ru' => 'контртерроризм', 'en' => 'counter terrorism'),
            18 => array('ru' => 'летняя школа', 'en' => 'summer school'),
            19 => array('ru' => 'международное гуманитарное право', 'en' => 'international humanitarian law'),
            20 => array('ru' => 'международное публичное право', 'en' => 'public international law'),
            21 => array('ru' => 'международное частное право', 'en' => 'private international law'),
            22 => array('ru' => 'международные организации', 'en' => 'international organizations'),
            23 => array('ru' => 'мероприятие', 'en' => 'event'),
            24 => array('ru' => 'МСП', 'en' => 'SME'),
            25 => array('ru' => 'муткорт', 'en' => 'moot court'),
            26 => array('ru' => 'несостоятельность', 'en' => 'insolvency'),
            27 => array('ru' => 'нефинансовая отчётность', 'en' => 'non-fanancial reporting'),
            28 => array('ru' => 'окружающая среда', 'en' => 'environment'),
            29 => array('ru' => 'ООН', 'en' => 'UN'),
            30 => array('ru' => 'ПМЮФ', 'en' => 'SPBILF'),
            31 => array('ru' => 'права человека', 'en' => 'human rights'),
            32 => array('ru' => 'премия', 'en' => 'award'),
            33 => array('ru' => 'публикация', 'en' => 'publication'),
            34 => array('ru' => 'Россия', 'en' => 'Russia'),
            35 => array('ru' => 'сотрудничество', 'en' => 'cooperation'),
            36 => array('ru' => 'сравнительное правоведение', 'en' => 'comparative law'),
            37 => array('ru' => 'США', 'en' => 'USA'),
            38 => array('ru' => 'торговое право', 'en' => 'trade law'),
            39 => array('ru' => 'транспорт', 'en' => 'transport'),
            40 => array('ru' => 'ТУР', 'en' => 'CBAM'),
            41 => array('ru' => 'унификация', 'en' => 'unification'),
            42 => array('ru' => 'цифровизация', 'en' => 'digitalization'),
            43 => array('ru' => 'экспериментальное регулирование', 'en' => 'experimental regulation'),
            44 => array('ru' => 'электронная торговля', 'en' => 'digital trade'),
            45 => array('ru' => 'COVID-19', 'en' => 'COVID-19'),
            46 => array('ru' => 'ESG', 'en' => 'ESG'),
            47 => array('ru' => 'ISA', 'en' => 'ISA'),
            48 => array('ru' => 'UNCITRAL', 'en' => 'UNCITRAL'),
            49 => array('ru' => 'UNCTAD', 'en' => 'UNCTAD'),
            50 => array('ru' => 'UNIDROIT', 'en' => 'UNIDROIT'),
        );

        foreach($tags as $tag){
            $item = new Tag();
            $item->save();

            DB::table('tag_translations')->insert([
                [
                    'tag_id' => $item->id,
                    'name' => Str::ucfirst($tag['ru']),
                    'locale' => 'ru'
                ],
                [
                    'tag_id' => $item->id,
                    'name' => Str::ucfirst($tag['en']),
                    'locale' => 'en'
                ]
            ]);
        }

        DB::table('experts')->insert([
            [
                'id' => 1,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex1.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex1-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex1-mob.jpg',
            ],
            [
                'id' => 2,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex2.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex2-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex2-mob.jpg',
            ],
            [
                'id' => 3,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex3.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex3-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex3-mob.jpg',
            ],
            [
                'id' => 4,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex4.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex4-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex4-mob.jpg',
            ],
            [
                'id' => 5,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex5.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex5-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex5-mob.jpg',
            ],
            [
                'id' => 6,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex6.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex6-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex6-mob.jpg',
            ],
            [
                'id' => 7,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex7.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex7-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex7-mob.jpg',
            ],
            [
                'id' => 8,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex8.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex8-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex8-mob.jpg',
            ],
            [
                'id' => 9,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex9.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex9-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex9-mob.jpg',
            ],
            [
                'id' => 10,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex10.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex10-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex10-mob.jpg',
            ],
            [
                'id' => 11,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex11.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex11-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex11-mob.jpg',
            ],
            [
                'id' => 12,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex12.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex12-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex12-mob.jpg',
            ],
            [
                'id' => 13,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex13.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex13-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex13-mob.jpg',
            ],
            [
                'id' => 14,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex14.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex14-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex14-mob.jpg',
            ],
            [
                'id' => 15,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex15.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex15-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex15-mob.jpg',
            ],
            [
                'id' => 16,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex16.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex16-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex16-mob.jpg',
            ],
            [
                'id' => 17,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex17.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex17-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex17-mob.jpg',
            ],
            [
                'id' => 18,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex18.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex18-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex18-mob.jpg',
            ],
            [
                'id' => 19,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex19.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex19-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex19-mob.jpg',
            ],
            [
                'id' => 20,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex20.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex20-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex20-mob.jpg',
            ],
            [
                'id' => 21,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex21.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex21-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex21-mob.jpg',
            ],
            [
                'id' => 22,
                'type' => 0,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex22.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex22-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ex22-mob.jpg',
            ],
        ]);

        DB::table('expert_translations')->insert([
            [
                'expert_id' => 1,
                'locale' => 'en',
                'name' => 'Marat Abzalov',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 1,
                'locale' => 'ru',
                'name' => 'Marat Abzalov',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 2,
                'locale' => 'en',
                'name' => 'Estelle Camille Chambas',
                'country' => 'France'
            ],
            [
                'expert_id' => 2,
                'locale' => 'ru',
                'name' => 'Estelle Camille Chambas',
                'country' => 'France'
            ],
            [
                'expert_id' => 3,
                'locale' => 'en',
                'name' => 'Ronan Cormacain',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 3,
                'locale' => 'ru',
                'name' => 'Ronan Cormacain',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 4,
                'locale' => 'en',
                'name' => 'Enrico Del Prato',
                'country' => 'Italy'
            ],
            [
                'expert_id' => 4,
                'locale' => 'ru',
                'name' => 'Enrico Del Prato',
                'country' => 'Italy'
            ],
            [
                'expert_id' => 5,
                'locale' => 'en',
                'name' => 'Marie-Benedicte Dembour',
                'country' => 'Belgium'
            ],
            [
                'expert_id' => 5,
                'locale' => 'ru',
                'name' => 'Marie-Benedicte Dembour',
                'country' => 'Belgium'
            ],
            [
                'expert_id' => 6,
                'locale' => 'en',
                'name' => 'James Gerard Devaney',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 6,
                'locale' => 'ru',
                'name' => 'James Gerard Devaney',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 7,
                'locale' => 'en',
                'name' => 'Yuxue Fang',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 7,
                'locale' => 'ru',
                'name' => 'Yuxue Fang',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 8,
                'locale' => 'en',
                'name' => 'Katarina Matilda Fast Lappalainen',
                'country' => 'Sweden'
            ],
            [
                'expert_id' => 8,
                'locale' => 'ru',
                'name' => 'Katarina Matilda Fast Lappalainen',
                'country' => 'Sweden'
            ],
            [
                'expert_id' => 9,
                'locale' => 'en',
                'name' => 'Diego Brian Gosis',
                'country' => 'USA'
            ],
            [
                'expert_id' => 9,
                'locale' => 'ru',
                'name' => 'Diego Brian Gosis',
                'country' => 'USA'
            ],
            [
                'expert_id' => 10,
                'locale' => 'en',
                'name' => 'Khanlar Hajiyev',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 10,
                'locale' => 'ru',
                'name' => 'Khanlar Hajiyev',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 11,
                'locale' => 'en',
                'name' => 'Florian Heindler',
                'country' => 'Austria'
            ],
            [
                'expert_id' => 11,
                'locale' => 'ru',
                'name' => 'Florian Heindler',
                'country' => 'Austria'
            ],
            [
                'expert_id' => 12,
                'locale' => 'en',
                'name' => 'Laborde Fernand Dominique Jean-Paul',
                'country' => 'France'
            ],
            [
                'expert_id' => 12,
                'locale' => 'ru',
                'name' => 'Laborde Fernand Dominique Jean-Paul',
                'country' => 'France'
            ],
            [
                'expert_id' => 13,
                'locale' => 'en',
                'name' => 'Ian Lewis',
                'country' => 'China'
            ],
            [
                'expert_id' => 13,
                'locale' => 'ru',
                'name' => 'Ian Lewis',
                'country' => 'China'
            ],
            [
                'expert_id' => 14,
                'locale' => 'en',
                'name' => 'Ays Lidzhanova',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 14,
                'locale' => 'ru',
                'name' => 'Ays Lidzhanova',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 15,
                'locale' => 'en',
                'name' => 'Jose Mauricio Pacheco Jr.',
                'country' => 'Brazil'
            ],
            [
                'expert_id' => 15,
                'locale' => 'ru',
                'name' => 'Jose Mauricio Pacheco Jr.',
                'country' => 'Brazil'
            ],
            [
                'expert_id' => 16,
                'locale' => 'en',
                'name' => 'Elizabeth Anne Platt',
                'country' => 'USA'
            ],
            [
                'expert_id' => 16,
                'locale' => 'ru',
                'name' => 'Elizabeth Anne Platt',
                'country' => 'USA'
            ],
            [
                'expert_id' => 17,
                'locale' => 'en',
                'name' => 'Jackson Bruce Richard',
                'country' => 'USA'
            ],
            [
                'expert_id' => 17,
                'locale' => 'ru',
                'name' => 'Jackson Bruce Richard',
                'country' => 'USA'
            ],
            [
                'expert_id' => 18,
                'locale' => 'en',
                'name' => 'Michail Risvas',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 18,
                'locale' => 'ru',
                'name' => 'Michail Risvas',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 19,
                'locale' => 'en',
                'name' => 'Marco Sassòl',
                'country' => 'Switzerland'
            ],
            [
                'expert_id' => 19,
                'locale' => 'ru',
                'name' => 'Marco Sassòl',
                'country' => 'Switzerland'
            ],
            [
                'expert_id' => 20,
                'locale' => 'en',
                'name' => 'Dmitry Stepanov',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 20,
                'locale' => 'ru',
                'name' => 'Dmitry Stepanov',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 21,
                'locale' => 'en',
                'name' => 'Anna Sysoevaia',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 21,
                'locale' => 'ru',
                'name' => 'Anna Sysoevaia',
                'country' => 'Russia'
            ],
            [
                'expert_id' => 22,
                'locale' => 'en',
                'name' => 'Baiju Vasani',
                'country' => 'United Kingdom'
            ],
            [
                'expert_id' => 22,
                'locale' => 'ru',
                'name' => 'Baiju Vasani',
                'country' => 'United Kingdom'
            ],
        ]);
    }
}
