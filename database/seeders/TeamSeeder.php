<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'id' => 1,
                'email' => 'ekaterina_salugina@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t1.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t1-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t1-mob.jpg',
            ],
            [
                'id' => 2,
                'email' => 'roman_kolodkin@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t2.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t2-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t2-mob.jpg',
            ],
            [
                'id' => 3,
                'email' => 'jean-claude_knebeler@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t3.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t3-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t3-mob.jpg',
            ],
            [
                'id' => 4,
                'email' => null,
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t4.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t4-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t4-mob.jpg',
            ],
            [
                'id' => 5,
                'email' => 'victoria_manko@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t5.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t5-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t5-mob.jpg',
            ],
            [
                'id' => 6,
                'email' => 'alexander_beriev@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t6.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t6-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t6-mob.jpg',
            ],
            [
                'id' => 7,
                'email' => 'marina_livshits@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t7.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t7-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t7-mob.jpg',
            ],
            [
                'id' => 8,
                'email' => 'olga_melnichenko@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t8.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t8-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t8-mob.jpg',
            ],
            [
                'id' => 9,
                'email' => 'egor_fedorov@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t9.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t9-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t9-mob.jpg',
            ],
            [
                'id' => 10,
                'email' => 'diana_valeyeva@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t11.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t11-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t11-mob.jpg',
            ],
            [
                'id' => 11,
                'email' => 'yulia_bragirova@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t12.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t12-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t12-mob.jpg',
            ],
            [
                'id' => 12,
                'email' => 'yulia_dmitrieva@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t13.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t13-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t13-mob.jpg',
            ],
            [
                'id' => 13,
                'email' => 'library@iclrc.ru',
                'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t14.jpg',
                'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t14-hover.jpg',
                'image_dark' => 'https://iclrc-v2.uprising.agency/templates/v2/img/t14-mob.jpg',
            ],
        ]);

        DB::table('team_translations')->insert([
            [
                'team_id' => 1,
                'locale' => 'en',
                'name' => 'Ekaterina Salugina-Sorokovaya',
                'jobTitle' => 'General director'
            ],
            [
                'team_id' => 1,
                'locale' => 'ru',
                'name' => 'Ekaterina Salugina-Sorokovaya',
                'jobTitle' => 'General director'
            ],
            [
                'team_id' => 2,
                'locale' => 'en',
                'name' => 'Roman Kolodkin',
                'jobTitle' => 'Advisor on Public international law'
            ],
            [
                'team_id' => 2,
                'locale' => 'ru',
                'name' => 'Roman Kolodkin',
                'jobTitle' => 'Advisor on Public international law'
            ],
            [
                'team_id' => 3,
                'locale' => 'en',
                'name' => 'Jean-Claude Knebeler',
                'jobTitle' => 'Head of Sustainable development department'
            ],
            [
                'team_id' => 3,
                'locale' => 'ru',
                'name' => 'Jean-Claude Knebeler',
                'jobTitle' => 'Head of Sustainable development department'
            ],
            [
                'team_id' => 4,
                'locale' => 'en',
                'name' => 'Sofia Sarenkova',
                'jobTitle' => 'Head of Public international law'
            ],
            [
                'team_id' => 4,
                'locale' => 'ru',
                'name' => 'Sofia Sarenkova',
                'jobTitle' => 'Head of Public international law'
            ],
            [
                'team_id' => 5,
                'locale' => 'en',
                'name' => 'Victoria Mañko',
                'jobTitle' => 'Deputy General director'
            ],
            [
                'team_id' => 5,
                'locale' => 'ru',
                'name' => 'Victoria Mañko',
                'jobTitle' => 'Deputy General director'
            ],
            [
                'team_id' => 6,
                'locale' => 'en',
                'name' => 'Alexander Beriev',
                'jobTitle' => 'Strategic Communications director'
            ],
            [
                'team_id' => 6,
                'locale' => 'ru',
                'name' => 'Alexander Beriev',
                'jobTitle' => 'Strategic Communications director'
            ],
            [
                'team_id' => 7,
                'locale' => 'en',
                'name' => 'Marina Livshits',
                'jobTitle' => 'Counselor to General director'
            ],
            [
                'team_id' => 7,
                'locale' => 'ru',
                'name' => 'Marina Livshits',
                'jobTitle' => 'Counselor to General director'
            ],
            [
                'team_id' => 8,
                'locale' => 'en',
                'name' => 'Olga Melnichenko',
                'jobTitle' => 'Counselor in Private law'
            ],
            [
                'team_id' => 8,
                'locale' => 'ru',
                'name' => 'Olga Melnichenko',
                'jobTitle' => 'Counselor in Private law'
            ],
            [
                'team_id' => 9,
                'locale' => 'en',
                'name' => 'Egor Fedorov',
                'jobTitle' => 'Senior expert on Public international law'
            ],
            [
                'team_id' => 9,
                'locale' => 'ru',
                'name' => 'Egor Fedorov',
                'jobTitle' => 'Senior expert on Public international law'
            ],
            [
                'team_id' => 10,
                'locale' => 'en',
                'name' => 'Diana Valeyeva',
                'jobTitle' => 'Analyst'
            ],
            [
                'team_id' => 10,
                'locale' => 'ru',
                'name' => 'Diana Valeyeva',
                'jobTitle' => 'Analyst'
            ],
            [
                'team_id' => 11,
                'locale' => 'en',
                'name' => 'Yulia Bragirova',
                'jobTitle' => 'Project coordinator'
            ],
            [
                'team_id' => 11,
                'locale' => 'ru',
                'name' => 'Yulia Bragirova',
                'jobTitle' => 'Project coordinator'
            ],
            [
                'team_id' => 12,
                'locale' => 'en',
                'name' => 'Yulia Dmitrieva',
                'jobTitle' => 'Administrative assistant'
            ],
            [
                'team_id' => 12,
                'locale' => 'ru',
                'name' => 'Yulia Dmitrieva',
                'jobTitle' => 'Administrative assistant'
            ],
            [
                'team_id' => 13,
                'locale' => 'en',
                'name' => 'Anna Gorbunova',
                'jobTitle' => 'Information center specialis'
            ],
            [
                'team_id' => 13,
                'locale' => 'ru',
                'name' => 'Anna Gorbunova',
                'jobTitle' => 'Information center specialis'
            ],
        ]);
    }
}