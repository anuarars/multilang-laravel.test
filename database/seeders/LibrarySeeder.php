<?php

namespace Database\Seeders;

use App\Models\LibraryRegistration;
use Illuminate\Database\Seeder;
use App\Models\SocialNetwork;
use App\Models\MediabankGallery;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=1; $i < 26; $i++) { 
        //     DB::table('donators')->insert([
        //         'id' => $i,
        //         'type' => 'person'
        //     ]);
        // }
        // for ($i=26; $i < 29; $i++) { 
        //     DB::table('donators')->insert([
        //         'id' => $i,
        //         'type' => 'organization'
        //     ]);
        // }

        // DB::table('donator_translations')->insert([
        //     [
        //         'donator_id' => 1,
        //         'name' => 'Maksim Bashkatov',
        //         'description' => 'Lecturer of the Civil law department of the Faculty of law of the MSU. Editor-in-chief of the Journal of the Civil law',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 1,
        //         'name' => 'Maksim Bashkatov',
        //         'description' => 'Lecturer of the Civil law department of the Faculty of law of the MSU. Editor-in-chief of the Journal of the Civil law',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 2,
        //         'name' => 'Damir Bekyashev',
        //         'description' => 'PhD. Professor of the International law chair of the MGIMO university',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 2,
        //         'name' => 'Damir Bekyashev',
        //         'description' => 'PhD. Professor of the International law chair of the MGIMO university',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 3,
        //         'name' => 'Kamil Bekyashev',
        //         'description' => 'PhD. Professor, Member of the permanent court of arbitration from the Russian Federation, arbitrator of the UN International arbitration for the Law of the Sea',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 3,
        //         'name' => 'Kamil Bekyashev',
        //         'description' => 'PhD. Professor, Member of the permanent court of arbitration from the Russian Federation, arbitrator of the UN International arbitration for the Law of the Sea',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 4,
        //         'name' => 'Gary Born',
        //         'description' => 'International lawyer and academic. Сhair of the International arbitration and International litigation practices at the International law firm Wilmer cutler pickering hale and Dorr LLP',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 4,
        //         'name' => 'Gary Born',
        //         'description' => 'International lawyer and academic. Сhair of the International arbitration and International litigation practices at the International law firm Wilmer cutler pickering hale and Dorr LLP',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 5,
        //         'name' => 'Ronan Champion',
        //         'description' => 'Chartered surveyor. Partner of Champion Pearce LLP',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 5,
        //         'name' => 'Ronan Champion',
        //         'description' => 'Chartered surveyor. Partner of Champion Pearce LLP',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 6,
        //         'name' => 'Sergei Diachenko',
        //         'description' => 'Head of the Division of international economic law of the Legal department, the Ministry of foreign affairs of the Russian Federation',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 6,
        //         'name' => 'Sergei Diachenko',
        //         'description' => 'Head of the Division of international economic law of the Legal department, the Ministry of foreign affairs of the Russian Federation',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 7,
        //         'name' => 'Mikhail Galperin',
        //         'description' => 'Representative of the Russian Federation at the European court of human rights. Deputy minister of justice of the Russian Federation',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 7,
        //         'name' => 'Mikhail Galperin',
        //         'description' => 'Representative of the Russian Federation at the European court of human rights. Deputy minister of justice of the Russian Federation',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 8,
        //         'name' => 'Mojtaba Kazazi',
        //         'description' => 'Vice-president of the Institut de Droit International. Arbitrator',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 8,
        //         'name' => 'Mojtaba Kazazi',
        //         'description' => 'Vice-president of the Institut de Droit International. Arbitrator',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 9,
        //         'name' => 'Roman Khodykin',
        //         'description' => 'PhD. Partner at the London office of Bryan cave leighton paisner LLP. Visiting professor at Queen Mary university of London, solicitor of the Senior courts of England and Wales. ICAC arbitrator',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 9,
        //         'name' => 'Roman Khodykin',
        //         'description' => 'PhD. Partner at the London office of Bryan cave leighton paisner LLP. Visiting professor at Queen Mary university of London, solicitor of the Senior courts of England and Wales. ICAC arbitrator',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 10,
        //         'name' => 'Kriangsak Kittichaisaree',
        //         'description' => 'Ambassador extraordinary and plenipotentiary of the Kingdom of Thailand to the Russian Federation. A member of Tallinn manual 2.0 working group',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 10,
        //         'name' => 'Kriangsak Kittichaisaree',
        //         'description' => 'Ambassador extraordinary and plenipotentiary of the Kingdom of Thailand to the Russian Federation. A member of Tallinn manual 2.0 working group',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 11,
        //         'name' => 'Andrei Klishas',
        //         'description' => 'Chairman of the Committee of the Federal council on constitutional legislation and state building',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 11,
        //         'name' => 'Andrei Klishas',
        //         'description' => 'Chairman of the Committee of the Federal council on constitutional legislation and state building',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 12,
        //         'name' => 'Marcelo Kohen',
        //         'description' => 'Professor of International law at the Graduate institute of international and development studies in Geneva. Titular member of Institut de Droit International and its Secretary general',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 12,
        //         'name' => 'Marcelo Kohen',
        //         'description' => 'Professor of International law at the Graduate institute of international and development studies in Geneva. Titular member of Institut de Droit International and its Secretary general',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 13,
        //         'name' => 'Roman Kolodkin',
        //         'description' => 'PhD. Judge of the International tribunal for the Law of the Sea. Associate member of the Institut de Droit International. Director of Public international law studies at the ICLRC.',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 13,
        //         'name' => 'Roman Kolodkin',
        //         'description' => 'PhD. Judge of the International tribunal for the Law of the Sea. Associate member of the Institut de Droit International. Director of Public international law studies at the ICLRC.',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 14,
        //         'name' => 'Stefan Kroll',
        //         'description' => 'Honorary professor of Bucerius law school. Director of the Willem C. Vis Arbitration Moot in Vienna. International arbitrator',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 14,
        //         'name' => 'Stefan Kroll',
        //         'description' => 'Honorary professor of Bucerius law school. Director of the Willem C. Vis Arbitration Moot in Vienna. International arbitrator',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 15,
        //         'name' => 'Evgeniya Neverova',
        //         'description' => 'PhD. Individual entrepreneur',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 15,
        //         'name' => 'Evgeniya Neverova',
        //         'description' => 'PhD. Individual entrepreneur',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 16,
        //         'name' => 'Ekaterina Papchenkova',
        //         'description' => 'Expert of bankruptcy and Corporate law',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 16,
        //         'name' => 'Ekaterina Papchenkova',
        //         'description' => 'Expert of bankruptcy and Corporate law',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 17,
        //         'name' => 'Vadim Plekhanov',
        //         'description' => 'PhD. Master of Private law',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 17,
        //         'name' => 'Vadim Plekhanov',
        //         'description' => 'PhD. Master of Private law',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 18,
        //         'name' => 'Sergey Polukarov',
        //         'description' => 'PG student of law faculty of studies on Public law of the Higher school of economics',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 18,
        //         'name' => 'Sergey Polukarov',
        //         'description' => 'PG student of law faculty of studies on Public law of the Higher school of economics',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 19,
        //         'name' => 'Sergey Punzhin',
        //         'description' => 'PhD. Principal legal secretary of the Court. Head of the department of legal matters of International court of justice',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 19,
        //         'name' => 'Sergey Punzhin',
        //         'description' => 'PhD. Principal legal secretary of the Court. Head of the department of legal matters of International court of justice',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 20,
        //         'name' => 'Ilya Rachkov',
        //         'description' => 'PhD. LLM. Adjunct professor of the International law chair of MGIMO university. Lawyer. Member of the editorial board of the “International Justice” journal',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 20,
        //         'name' => 'Ilya Rachkov',
        //         'description' => 'PhD. LLM. Adjunct professor of the International law chair of MGIMO university. Lawyer. Member of the editorial board of the “International Justice” journal',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 21,
        //         'name' => 'Aniruddha Rajput',
        //         'description' => 'Member of the UN International law commission',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 21,
        //         'name' => 'Aniruddha Rajput',
        //         'description' => 'Member of the UN International law commission',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 22,
        //         'name' => 'Anton Serebryakov',
        //         'description' => 'Specialist on tax and legal practices in the Ernst & Young',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 22,
        //         'name' => 'Anton Serebryakov',
        //         'description' => 'Specialist on tax and legal practices in the Ernst & Young',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 23,
        //         'name' => 'Vladislav Tolstykh',
        //         'description' => 'PhD. Head of International law department of the Novosibirsk state university. Leading researcher of the Institute of philosophy and law of the Siberian branch of the Russian academy of sciences',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 23,
        //         'name' => 'Vladislav Tolstykh',
        //         'description' => 'PhD. Head of International law department of the Novosibirsk state university. Leading researcher of the Institute of philosophy and law of the Siberian branch of the Russian academy of sciences',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 24,
        //         'name' => 'Vladimir Tunkin',
        //         'description' => 'Doctor of physical and mathematical sciences. The son of prominent Russian lawyer G. I. Tunkin',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 24,
        //         'name' => 'Vladimir Tunkin',
        //         'description' => 'Doctor of physical and mathematical sciences. The son of prominent Russian lawyer G. I. Tunkin',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 25,
        //         'name' => 'Bakhtiyar Tuzmukhamedov',
        //         'description' => 'Judge ad hoc of the European court of Human rights. Member of the Committee against Torture. Honored lawyer of the Russian Federation',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 25,
        //         'name' => 'Bakhtiyar Tuzmukhamedov',
        //         'description' => 'Judge ad hoc of the European court of Human rights. Member of the Committee against Torture. Honored lawyer of the Russian Federation',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 26,
        //         'name' => 'International Court of Justice',
        //         'description' => 'The principal judicial organ of the United Nations',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 26,
        //         'name' => 'International Court of Justice',
        //         'description' => 'The principal judicial organ of the United Nations',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 27,
        //         'name' => 'Library of the Spb. university',
        //         'description' => 'The principal judicial organ of the United Nations',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 27,
        //         'name' => 'Library of the Spb. university',
        //         'description' => 'The principal judicial organ of the United Nations',
        //         'locale' => 'en'
        //     ],
        //     [
        //         'donator_id' => 28,
        //         'name' => 'Russian arbitration center',
        //         'description' => 'Russian permanent arbitral institution officially authorized by the Government of the Russian Federation',
        //         'locale' => 'ru'
        //     ],
        //     [
        //         'donator_id' => 28,
        //         'name' => 'Russian arbitration center',
        //         'description' => 'Russian permanent arbitral institution officially authorized by the Government of the Russian Federation',
        //         'locale' => 'en'
        //     ],
        // ]);

        DB::table('partners')->insert([
            [
            'id' => 1,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp1.jpg',
            'link' => 'https://brill.com/',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp1-h.jpg',
            'type' => 'library',
            ],
            [
            'id' => 2,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp2.jpg',
            'link' => 'https://referenceworks.brillonline.com/browse/the-hague-academy-collected-courses',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp2-h.jpg',
            ],
            [
            'id' => 3,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp3.jpg',
            'link' => 'https://www.cambridge.org/core',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp3-h.jpg',
            ],
            [
            'id' => 4,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp4.jpg',
            'link' => 'http://digizeitschriften.de/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp4-h.jpg',
            ],
            [
            'id' => 5,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp5.jpg',
            'link' => 'http://heinonline.org/HOL/Welcome',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp5-h.jpg',
            ],
            [
            'id' => 6,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp6.jpg',
            'link' => 'http://library.iccwbo.org/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp6-h.jpg',
            ],
            [
            'id' => 7,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lpb7.jpg',
            'link' => 'http://kluwerarbitration.com/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp7-h.jpg',
            ],
            [
            'id' => 8,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp8.jpg',
            'link' => 'http://academic.oup.com/journals/pages/law',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp8-h.jpg',
            ],
            [
            'id' => 9,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp9.jpg',
            'link' => 'http://opil.ouplaw.com/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp9-h.jpg',
            ],
            [
            'id' => 10,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lpb10.jpg',
            'link' => 'http://olrl.ouplaw.com/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp10-h.jpg',
            ],
            [
            'id' => 11,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp11.jpg',
            'link' => 'http://www.westlawinternational.com/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp11-h.jpg',
            ],
            [
            'id' => 12,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp12.jpg',
            'link' => 'http://www.garant.ru/',
            'type' => 'library',
            'image_hover' => 'https://iclrc-v2.uprising.agency/templates/v2/img/lbp12-h.jpg',
            ],
        ]);

        DB::table('partner_translations')->insert([
            [
                'partner_id' => 1,
                'name' => 'Brill International law & Human rights journal collection',
                'locale' => 'ru',
                'country' => 'Netherlands'
            ],
            [
                'partner_id' => 1,
                'name' => 'Brill International law & Human rights journal collection',
                'locale' => 'en',
                'country' => 'Netherlands'
            ],
            [
                'partner_id' => 2,
                'name' => 'Hague academy collected courses online',
                'locale' => 'ru',
                'country' => 'Netherlands'
            ],
            [
                'partner_id' => 2,
                'name' => 'Hague academy collected courses online',
                'locale' => 'en',
                'country' => 'Netherlands'
            ],
            [
                'partner_id' => 3,
                'name' => 'Cambridge law journals',
                'locale' => 'ru',
                'country' => 'England'
            ],
            [
                'partner_id' => 3,
                'name' => 'Cambridge law journals',
                'locale' => 'en',
                'country' => 'England'
            ],
            [
                'partner_id' => 4,
                'name' => 'Digizeitschriften',
                'locale' => 'ru',
                'country' => 'Germany'
            ],
            [
                'partner_id' => 4,
                'name' => 'Digizeitschriften',
                'locale' => 'en',
                'country' => 'Germany'
            ],
            [
                'partner_id' => 5,
                'name' => 'Heinonline',
                'locale' => 'ru',
                'country' => 'USA'
            ],
            [
                'partner_id' => 5,
                'name' => 'Heinonline',
                'locale' => 'en',
                'country' => 'USA'
            ],
            [
                'partner_id' => 6,
                'name' => 'ICC Digital library – dispute resolution channel',
                'locale' => 'ru',
                'country' => 'France'
            ],
            [
                'partner_id' => 6,
                'name' => 'ICC Digital library – dispute resolution channel',
                'locale' => 'en',
                'country' => 'France'
            ],
            [
                'partner_id' => 7,
                'name' => 'Kluwer arbitration',
                'locale' => 'ru',
                'country' => 'USA'
            ],
            [
                'partner_id' => 7,
                'name' => 'Kluwer arbitration',
                'locale' => 'en',
                'country' => 'USA'
            ],
            [
                'partner_id' => 8,
                'name' => 'Oxford journals law collection',
                'locale' => 'ru',
                'country' => 'England'
            ],
            [
                'partner_id' => 8,
                'name' => 'Oxford journals law collection',
                'locale' => 'en',
                'country' => 'England'
            ],
            [
                'partner_id' => 9,
                'name' => 'Oxford Public international law',
                'locale' => 'ru',
                'country' => 'England'
            ],
            [
                'partner_id' => 9,
                'name' => 'Oxford Public international law',
                'locale' => 'en',
                'country' => 'England'
            ],
            [
                'partner_id' => 10,
                'name' => 'Oxford legal research library',
                'locale' => 'ru',
                'country' => 'England'
            ],
            [
                'partner_id' => 10,
                'name' => 'Oxford legal research library',
                'locale' => 'en',
                'country' => 'England'
            ],
            [
                'partner_id' => 11,
                'name' => 'Thomson reuters westlaw',
                'locale' => 'ru',
                'country' => 'USA'
            ],
            [
                'partner_id' => 11,
                'name' => 'Thomson reuters westlaw',
                'locale' => 'en',
                'country' => 'USA'
            ],
            [
                'partner_id' => 12,
                'name' => 'Garant.ru Legal information portal',
                'locale' => 'ru',
                'country' => 'Russia'
            ],
            [
                'partner_id' => 12,
                'name' => 'Garant.ru Legal information portal',
                'locale' => 'en',
                'country' => 'Russia'
            ],
        ]);


        SocialNetwork::create([
            'youtube' => 'https://www.youtube.com/',
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'linkedin' => 'https://www.linkedin.com/'
        ]);
        LibraryRegistration::factory(10)->create();

        \App\Models\Mediabank::factory(20)->create()->each(function($media){
            MediabankGallery::factory()->count(10)->create([
                'mediabank_id' => $media->id
            ]);
        });
    }
}
