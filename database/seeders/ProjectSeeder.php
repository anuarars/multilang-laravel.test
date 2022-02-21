<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker_ru = Faker::create('ru_RU');
        $faker_en = Faker::create('en_US');

        $dateStart = $faker_ru->dateTimeBetween('-20 days', ' 20 days');
        $dateEnd = $faker_ru->dateTimeBetween('21 day', '30 days');
        $start = $dateStart->format('Y/m/d H:i');
        $end = $dateEnd->format('Y/m/d H:i');

        DB::table('projects')->insert([
            [
                'id' => 1,
                'slug' => 'award',
                'award' => 'Diploma and 300,000 P',
                'datetimes' => ''.$start.' - '.$end.'',
                'announcement_competition' => $faker_ru->dateTimeBetween('-30 days', ' 50 days'),
                'announcement_result' => $faker_ru->dateTimeBetween('-50 days', ' 80 days'),
                'logo' =>'https://iclrc-v2.uprising.agency/templates/v2/img/project1.jpg',
                'logo_hover' =>'https://iclrc-v2.uprising.agency/templates/v2/img/project1-hover.jpg',
            ],
            [
                'id' => 2,
                'slug' => 'summer-school',
                'award' => null,
                'datetimes' => ''.$start.' - '.$end.'',
                'announcement_competition' => $faker_ru->dateTimeBetween('-30 days', ' 50 days'),
                'announcement_result' => $faker_ru->dateTimeBetween('-50 days', ' 80 days'),
                'logo' => 'https://iclrc-v2.uprising.agency/templates/v2/img/project2.jpg',
                'logo_hover' =>'https://iclrc-v2.uprising.agency/templates/v2/img/project2-hover.jpg',
            ]
        ]
        );

        DB::table('project_translations')->insert([
            'project_id' => 2,
            'name' => 'The Summer School on Public International Law',
            'schedule' => '
            <div>
                <p class="pl-item__text">
                General Course: <br>
                10 lectures <br>
                2 seminars
                </p>
                <p class="pl-item__text">
                Special courses: <br>
                5 lectures <br>
                1 seminar
                </p>
            </div>
          ',
          'fee' => '5000 euro',
            'description' => '
                <div class="project-school__text-1">
                    <h1 class="h2 projects-law__title titleObserver">
                        The Summer School on Public International Law
                    </h1>
                    <p class="research__text serif-big">
                        The curriculum comprises a General Course and a series of Special Courses on different topics,
                        seminars, and
                        independent learning.
                    </p>
                    <p class="research__text serif-big">
                        In addition, other activities can be carried out, both on international law issues and aimed at
                        improving
                        contacts between attendees
                    </p>
                    <p class="research__text serif-big">
                        There are 34 slots available at the Summer School in 2022.
                    </p>
                    <p class="research__text serif-big">
                        Successful applicants will be required to pay a registration fee of ₽ 5,000 no later than 14
                        calendar days
                        after notification about the results of the selection process. In case of a subsequent refusal
                        to
                        participate in the Summer School, the registration fee is not refundable. Foreign experts read
                        their courses
                        in English, with no interpretation.
                    </p>
                    <p class="research__text serif-big">
                        Attendees are welcome to use all information resources available at the Centers Library,
                        including
                        databases.
                    </p>
                    <p class="research__text serif-big">
                        The Summer School schedule is intense — it is not recommended to combine it with other
                        activities
                        (work/study). At the end of the term, attendees are awarded a Certificate of Attendance (to
                        qualify for a
                        Certificate attendance at not less than 90% of all courses is required)
                    </p>
                    <p class="research__text serif-big">
                        If you have any questions concerning the School please contact us at summer_school@iclrc.ru
                    </p>
                </div>
            ',
            'terms' => '
            <div class="project-school__text-2">
            <h3 class="projects-law__subtitle">
              Admission
            </h3>
            <p class="research__text serif-big">
              The School is open to nationals of Russia and other States of the Commonwealth of Independent States with a
              bachelors degree in law (or equivalent), who have passed an exam on public international law as part of
              their studies and are able to study in English.
            </p>
            <p class="research__text serif-big">
              All those willing to attend the School, have to:
            </p>
            <ol class="serif-big projects-law__list">
              <li>
                Submit the application form
              </li>
              <li>
                Submit the following documents:
              </li>
            </ol>
            <ul class="research__list no-gap serif-big">
              <li>
                a copy of applicants valid passport (if the original document is not <br> in Russian, please add a
                <span class="tooltip-wrap">
                  <button type="button" class="tooltip-word btn-reset">
                    translation
                  </button>
                  <span class="tooltip" role="dialog">
                    <button type="button" class="btn-reset tooltip__close">
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                        <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                    <span class="tooltip__text">
                      You can translate the document into Russian yourself, as long as you add the date, place, your name
                      and signature.
                    </span>
                  </span>
                </span>)
              </li>
              <li>
                an identity photograph (front view, light background, the face <br> should cover not less than 80% of the
                photo, size 480×640, <br>
                file type JPEG)
              </li>
              <li>
                proof of having obtain a bachelor or higher (e.g. masters) degree in <br> law (or equivalent) and having
                passed an exam in international <br> law (if the original document is not in Russian, please add a <br>
                translation
              </li>
              <li>
                the CV (in Russian or English)
              </li>
              <li>
                motivation letter (in Russian and English, 1 page А4, <br>
                Times New Roman, 12)
              </li>
            </ul>
          </div>
            ',
            'contacts' => '
            <span class="pl-item__title gray">
                            Summer school contacts
                        </span>
                        <div class="pl-item__group">
                            <div class="pl-item__text">
                                <a href="tel:+74956406565" target="_blank" class="more-link link-reset">
                                    +7 495 640 65 65
                                </a>
                            </div>
                            <div class="pl-item__text">
                                <a href="tel:summer_school@iclrc.ru" target="_blank" class="more-link link-reset">
                                    summer_school@iclrc.ru
                                </a>
                            </div>
                            <div class="pl-item__text">
                                <a href="#" target="_blank" class="more-link link-reset">
                                    Facebook
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <g opacity="0.5">
                                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="pl-item__text">
                                <a href="#" target="_blank" class="more-link link-reset">
                                    Youtube
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <g opacity="0.5">
                                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                        </div>
            ',
            'locale' => 'ru',
            'scholarship' => '
                <div class="project-school__text-3">
                <h3 class="projects-law__subtitle">
                Scholarship
                </h3>
                <p class="research__text serif-big">
                Non-resident
                <span class="tooltip-wrap">
                    <button type="button" class="tooltip-word btn-reset">
                    participants
                    </button>
                    <span class="tooltip" role="dialog">
                    <button type="button" class="btn-reset tooltip__close">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                        <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <span class="tooltip__text">
                        Non-resident participant – a person residing outside Moscow and the Moscow Region who meets the
                        requirements for attendance of the School.
                    </span>
                    </span>
                </span>
                may be granted a scholarship of up to <br>
                ₽ 30,000 to cover the actual expenditures — accommodation costs incurred by living in Moscow and transport
                costs for their travel from the place of residence to Moscow and back. The participant, who has been granted
                the scholarship, shall submit documents confirming the relevant expenses no later than August 15, 2022.
                </p>
                <p class="research__text serif-big">
                Please, apply for the scholarship while filling the application form.
                </p>
                <p class="research__text serif-big">
                The scholarship will be paid to the participants upon presentation and signing of the relevant documents
                during the second week of the Summer School.
                </p>
            </div>
            ',
            'other_information' => '
            <div class="p-school">
            <h3 class="projects-law__subtitle">
              Past schools
            </h3>
            <div class="p-school__scroll">
              <div class="p-school__container">
                <div class="p-school-item p-school-item--1 active">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2021
                    </button>
                    <strong class="p-school-item__date">
                      August 2…13
                    </strong>
                    <div class="p-shool-item__format">
                      Online format
                    </div>
                  </div>
                </div>
                <div class="p-school-item p-school-item--2">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2020
                    </button>
                    <strong class="p-school-item__date">
                      August 10…21
                    </strong>
                    <div class="p-shool-item__format">
                    </div>
                  </div>
                </div>
                <div class="p-school-item p-school-item--3">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2019
                    </button>
                    <strong class="p-school-item__date">
                      August 5…16
                    </strong>
                    <div class="p-shool-item__format">
                    </div>
                  </div>
                </div>
                <div class="p-school-item p-school-item--4">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2018
                    </button>
                    <strong class="p-school-item__date">
                      August 13…26
                    </strong>
                    <div class="p-shool-item__format">
                    </div>
                  </div>
      
                </div>
              </div>
            </div>
            <div class="row psh-row">
              <div class="col-md-4 psh-col">
                <div class="psh-item">
                  <div class="psh-item__button h4" tabindex="0">
                    Topics and schedule
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none">
                      <path d="M4 3.68205L7.11125 0.5L8 1.40897L4 5.5L0 1.40897L0.888749 0.5L4 3.68205Z" fill="#5B5C5B"/>
                    </svg>
      
                  </div>
                  <p class="psh-item__text psh-205">
                    The curriculum comprised a General Course and a series of Special Courses on the topic "International Investment Law",
                    <span class="psh-text-open">
                      seminars, independent learning, meetings on various issues of international law with Roman Kolodkin, Judge at the International Tribunal for the Law of the Sea, Martina Polasek, Deputy Secretary-General of the International Centre for Settlement of Investment Disputes, Evgeniy Zagainov, Director of the Legal Department of the Ministry of Foreign Affairs of the Russian Federation, Anna Joubin-Bret, and also entertaining programme
                    </span>
                  </p>
                </div>
                <div class="psh-text">
                  <b>General Course:</b>
                  10 lectures, 2 seminars
                  <b>Special courses:</b>
                  5 lectures, 1 seminar
                </div>
              </div>
              <div class="col-md-4 psh-col">
                <div class="psh-item__button h4">
                  Topics and schedule
                </div>
                <p class="psh-item__text">
                  34 researchers/practitioners <br>
                  in the field of international law from:
                  <span>
                    Armenia<br>
                    Belarus<br>
                    Kazakhstan<br>
                    Kyrgyzstan<br>
                    Russia<br>
                    Uzbekistan
                  </span>
                </p>
              </div>
              <div class="col-md-4 psh-col">
                <div class="psh-item__button h4">
                  Media
                </div>
                <p class="psh-item__text">
                  <a href="#" class="link-reset">
                    Photo
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.68244 0.800917L8.99396 0.666929C9.46928 0.654939 9.84489 1.03054 9.8329 1.50586L9.69891 6.81738C9.68692 7.2927 9.29188 7.68774 8.81656 7.69973C8.34124 7.71172 7.96563 7.33612 7.97762 6.8608L8.0592 3.62706L1.62092 10.0653C1.27633 10.4099 0.731406 10.4237 0.403782 10.096C0.0761592 9.76842 0.0899052 9.22349 0.434485 8.87891L6.87277 2.44063L3.63902 2.5222C3.1637 2.53419 2.7881 2.15859 2.80009 1.68327C2.81208 1.20795 3.20712 0.812907 3.68244 0.800917Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                  <a href="#" class="link-reset">
                    Video
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.68244 0.800917L8.99396 0.666929C9.46928 0.654939 9.84489 1.03054 9.8329 1.50586L9.69891 6.81738C9.68692 7.2927 9.29188 7.68774 8.81656 7.69973C8.34124 7.71172 7.96563 7.33612 7.97762 6.8608L8.0592 3.62706L1.62092 10.0653C1.27633 10.4099 0.731406 10.4237 0.403782 10.096C0.0761592 9.76842 0.0899052 9.22349 0.434485 8.87891L6.87277 2.44063L3.63902 2.5222C3.1637 2.53419 2.7881 2.15859 2.80009 1.68327C2.81208 1.20795 3.20712 0.812907 3.68244 0.800917Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                </p>
              </div>
            </div>
            <div class="s-programm">
              <h4 class="s-programm__title">
                Program
              </h4>
              <div class="row sp-row">
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Rüdiger Wolfrum
                    </h5>
                    <p>
                      General course on Public <br>
                      International Law
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Catharine Titi
                    </h5>
                    <p>
                      The Right to Regulate in International <br>
                       Investment Law
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Anna Joubin-Bret
                    </h5>
                    <p>
                      Substantive Standards of Protection in <br>
                      International Investment law
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Samuel Wordsworth
                    </h5>
                    <p>
                      International Investment Law — History, <br>
                      Present, Perspectives
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Sergey Usoskin
                    </h5>
                    <p>
                      Foreign Investments and Investors
                    </p>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Makane Moïse Mbengue
                    </h5>
                    <p>
                      Investor-State Dispute Settlement
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="pse-guests">
              <p>
                Guest lectures on various
                issues of International Law:
              </p>
              <a href="#" class="link-reset">
                <b>Roman Kolodkin</b>
                <b>Martina Polasek</b>
                <b>Evgeniy Zagainov</b>
                <b>Anna Joubin-Bret</b>
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"></path>
                </svg>
              </a>
            </div>
          </div>
            '
        ]);

        DB::table('project_translations')->insert([
            'project_id' => 2,
            'name' => 'The Summer School on Public International Law',
            'schedule' => '
            <div>
                <p class="pl-item__text">
                General Course: <br>
                10 lectures <br>
                2 seminars
                </p>
                <p class="pl-item__text">
                Special courses: <br>
                5 lectures <br>
                1 seminar
                </p>
            </div>
          ',
          'fee' => '5000 euro',
            'description' => '
                <div class="project-school__text-1">
                    <h1 class="h2 projects-law__title titleObserver">
                        The Summer School on Public International Law
                    </h1>
                    <p class="research__text serif-big">
                        The curriculum comprises a General Course and a series of Special Courses on different topics,
                        seminars, and
                        independent learning.
                    </p>
                    <p class="research__text serif-big">
                        In addition, other activities can be carried out, both on international law issues and aimed at
                        improving
                        contacts between attendees
                    </p>
                    <p class="research__text serif-big">
                        There are 34 slots available at the Summer School in 2022.
                    </p>
                    <p class="research__text serif-big">
                        Successful applicants will be required to pay a registration fee of ₽ 5,000 no later than 14
                        calendar days
                        after notification about the results of the selection process. In case of a subsequent refusal
                        to
                        participate in the Summer School, the registration fee is not refundable. Foreign experts read
                        their courses
                        in English, with no interpretation.
                    </p>
                    <p class="research__text serif-big">
                        Attendees are welcome to use all information resources available at the Centers Library,
                        including
                        databases.
                    </p>
                    <p class="research__text serif-big">
                        The Summer School schedule is intense — it is not recommended to combine it with other
                        activities
                        (work/study). At the end of the term, attendees are awarded a Certificate of Attendance (to
                        qualify for a
                        Certificate attendance at not less than 90% of all courses is required)
                    </p>
                    <p class="research__text serif-big">
                        If you have any questions concerning the School please contact us at summer_school@iclrc.ru
                    </p>
                </div>
            ',
            'terms' => '
            <div class="project-school__text-2">
            <h3 class="projects-law__subtitle">
              Admission
            </h3>
            <p class="research__text serif-big">
              The School is open to nationals of Russia and other States of the Commonwealth of Independent States with a
              bachelors degree in law (or equivalent), who have passed an exam on public international law as part of
              their studies and are able to study in English.
            </p>
            <p class="research__text serif-big">
              All those willing to attend the School, have to:
            </p>
            <ol class="serif-big projects-law__list">
              <li>
                Submit the application form
              </li>
              <li>
                Submit the following documents:
              </li>
            </ol>
            <ul class="research__list no-gap serif-big">
              <li>
                a copy of applicants valid passport (if the original document is not <br> in Russian, please add a
                <span class="tooltip-wrap">
                  <button type="button" class="tooltip-word btn-reset">
                    translation
                  </button>
                  <span class="tooltip" role="dialog">
                    <button type="button" class="btn-reset tooltip__close">
                      <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                        <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                    <span class="tooltip__text">
                      You can translate the document into Russian yourself, as long as you add the date, place, your name
                      and signature.
                    </span>
                  </span>
                </span>)
              </li>
              <li>
                an identity photograph (front view, light background, the face <br> should cover not less than 80% of the
                photo, size 480×640, <br>
                file type JPEG)
              </li>
              <li>
                proof of having obtain a bachelor or higher (e.g. masters) degree in <br> law (or equivalent) and having
                passed an exam in international <br> law (if the original document is not in Russian, please add a <br>
                translation
              </li>
              <li>
                the CV (in Russian or English)
              </li>
              <li>
                motivation letter (in Russian and English, 1 page А4, <br>
                Times New Roman, 12)
              </li>
            </ul>
          </div>
            ',
            'contacts' => '
            <span class="pl-item__title gray">
                            Summer school contacts
                        </span>
                        <div class="pl-item__group">
                            <div class="pl-item__text">
                                <a href="tel:+74956406565" target="_blank" class="more-link link-reset">
                                    +7 495 640 65 65
                                </a>
                            </div>
                            <div class="pl-item__text">
                                <a href="tel:summer_school@iclrc.ru" target="_blank" class="more-link link-reset">
                                    summer_school@iclrc.ru
                                </a>
                            </div>
                            <div class="pl-item__text">
                                <a href="#" target="_blank" class="more-link link-reset">
                                    Facebook
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <g opacity="0.5">
                                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="pl-item__text">
                                <a href="#" target="_blank" class="more-link link-reset">
                                    Youtube
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <g opacity="0.5">
                                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                        </div>
            ',
            'locale' => 'en',
            'scholarship' => '
                <div class="project-school__text-3">
                <h3 class="projects-law__subtitle">
                Scholarship
                </h3>
                <p class="research__text serif-big">
                Non-resident
                <span class="tooltip-wrap">
                    <button type="button" class="tooltip-word btn-reset">
                    participants
                    </button>
                    <span class="tooltip" role="dialog">
                    <button type="button" class="btn-reset tooltip__close">
                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                        <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <span class="tooltip__text">
                        Non-resident participant – a person residing outside Moscow and the Moscow Region who meets the
                        requirements for attendance of the School.
                    </span>
                    </span>
                </span>
                may be granted a scholarship of up to <br>
                ₽ 30,000 to cover the actual expenditures — accommodation costs incurred by living in Moscow and transport
                costs for their travel from the place of residence to Moscow and back. The participant, who has been granted
                the scholarship, shall submit documents confirming the relevant expenses no later than August 15, 2022.
                </p>
                <p class="research__text serif-big">
                Please, apply for the scholarship while filling the application form.
                </p>
                <p class="research__text serif-big">
                The scholarship will be paid to the participants upon presentation and signing of the relevant documents
                during the second week of the Summer School.
                </p>
            </div>
            ',
            'other_information' => '
            <div class="p-school">
            <h3 class="projects-law__subtitle">
              Past schools
            </h3>
            <div class="p-school__scroll">
              <div class="p-school__container">
                <div class="p-school-item p-school-item--1 active">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2021
                    </button>
                    <strong class="p-school-item__date">
                      August 2…13
                    </strong>
                    <div class="p-shool-item__format">
                      Online format
                    </div>
                  </div>
                </div>
                <div class="p-school-item p-school-item--2">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2020
                    </button>
                    <strong class="p-school-item__date">
                      August 10…21
                    </strong>
                    <div class="p-shool-item__format">
                    </div>
                  </div>
                </div>
                <div class="p-school-item p-school-item--3">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2019
                    </button>
                    <strong class="p-school-item__date">
                      August 5…16
                    </strong>
                    <div class="p-shool-item__format">
                    </div>
                  </div>
                </div>
                <div class="p-school-item p-school-item--4">
                  <div class="p-shool__top">
                    <button class="p-school-item__btn btn-reset" type="button">
                      2018
                    </button>
                    <strong class="p-school-item__date">
                      August 13…26
                    </strong>
                    <div class="p-shool-item__format">
                    </div>
                  </div>
      
                </div>
              </div>
            </div>
            <div class="row psh-row">
              <div class="col-md-4 psh-col">
                <div class="psh-item">
                  <div class="psh-item__button h4" tabindex="0">
                    Topics and schedule
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none">
                      <path d="M4 3.68205L7.11125 0.5L8 1.40897L4 5.5L0 1.40897L0.888749 0.5L4 3.68205Z" fill="#5B5C5B"/>
                    </svg>
      
                  </div>
                  <p class="psh-item__text psh-205">
                    The curriculum comprised a General Course and a series of Special Courses on the topic "International Investment Law",
                    <span class="psh-text-open">
                      seminars, independent learning, meetings on various issues of international law with Roman Kolodkin, Judge at the International Tribunal for the Law of the Sea, Martina Polasek, Deputy Secretary-General of the International Centre for Settlement of Investment Disputes, Evgeniy Zagainov, Director of the Legal Department of the Ministry of Foreign Affairs of the Russian Federation, Anna Joubin-Bret, and also entertaining programme
                    </span>
                  </p>
                </div>
                <div class="psh-text">
                  <b>General Course:</b>
                  10 lectures, 2 seminars
                  <b>Special courses:</b>
                  5 lectures, 1 seminar
                </div>
              </div>
              <div class="col-md-4 psh-col">
                <div class="psh-item__button h4">
                  Topics and schedule
                </div>
                <p class="psh-item__text">
                  34 researchers/practitioners <br>
                  in the field of international law from:
                  <span>
                    Armenia<br>
                    Belarus<br>
                    Kazakhstan<br>
                    Kyrgyzstan<br>
                    Russia<br>
                    Uzbekistan
                  </span>
                </p>
              </div>
              <div class="col-md-4 psh-col">
                <div class="psh-item__button h4">
                  Media
                </div>
                <p class="psh-item__text">
                  <a href="#" class="link-reset">
                    Photo
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.68244 0.800917L8.99396 0.666929C9.46928 0.654939 9.84489 1.03054 9.8329 1.50586L9.69891 6.81738C9.68692 7.2927 9.29188 7.68774 8.81656 7.69973C8.34124 7.71172 7.96563 7.33612 7.97762 6.8608L8.0592 3.62706L1.62092 10.0653C1.27633 10.4099 0.731406 10.4237 0.403782 10.096C0.0761592 9.76842 0.0899052 9.22349 0.434485 8.87891L6.87277 2.44063L3.63902 2.5222C3.1637 2.53419 2.7881 2.15859 2.80009 1.68327C2.81208 1.20795 3.20712 0.812907 3.68244 0.800917Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                  <a href="#" class="link-reset">
                    Video
                    <svg width="10" height="11" viewBox="0 0 10 11" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.68244 0.800917L8.99396 0.666929C9.46928 0.654939 9.84489 1.03054 9.8329 1.50586L9.69891 6.81738C9.68692 7.2927 9.29188 7.68774 8.81656 7.69973C8.34124 7.71172 7.96563 7.33612 7.97762 6.8608L8.0592 3.62706L1.62092 10.0653C1.27633 10.4099 0.731406 10.4237 0.403782 10.096C0.0761592 9.76842 0.0899052 9.22349 0.434485 8.87891L6.87277 2.44063L3.63902 2.5222C3.1637 2.53419 2.7881 2.15859 2.80009 1.68327C2.81208 1.20795 3.20712 0.812907 3.68244 0.800917Z" fill="#A9A8A8"/>
                    </svg>
                  </a>
                </p>
              </div>
            </div>
            <div class="s-programm">
              <h4 class="s-programm__title">
                Program
              </h4>
              <div class="row sp-row">
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Rüdiger Wolfrum
                    </h5>
                    <p>
                      General course on Public <br>
                      International Law
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Catharine Titi
                    </h5>
                    <p>
                      The Right to Regulate in International <br>
                       Investment Law
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Anna Joubin-Bret
                    </h5>
                    <p>
                      Substantive Standards of Protection in <br>
                      International Investment law
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Samuel Wordsworth
                    </h5>
                    <p>
                      International Investment Law — History, <br>
                      Present, Perspectives
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Sergey Usoskin
                    </h5>
                    <p>
                      Foreign Investments and Investors
                    </p>
                  </div>
                </div>
                <div class="col-md-4 sp-col">
                  <div class="sp-item">
                    <h5>
                      Makane Moïse Mbengue
                    </h5>
                    <p>
                      Investor-State Dispute Settlement
                    </p>
                    <a href="#" class="link-reset">
                      Recommended reading
                      <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"/>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="pse-guests">
              <p>
                Guest lectures on various
                issues of International Law:
              </p>
              <a href="#" class="link-reset">
                <b>Roman Kolodkin</b>
                <b>Martina Polasek</b>
                <b>Evgeniy Zagainov</b>
                <b>Anna Joubin-Bret</b>
                <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46064 0.300917L9.77216 0.166929C10.2475 0.154939 10.6231 0.530542 10.6111 1.00586L10.4771 6.31738C10.4651 6.7927 10.0701 7.18774 9.59475 7.19973C9.11944 7.21172 8.74383 6.83612 8.75582 6.3608L8.8374 3.12706L2.39911 9.56534C2.05453 9.90992 1.5096 9.92367 1.18198 9.59604C0.854357 9.26842 0.868103 8.72349 1.21268 8.37891L7.65097 1.94063L4.41722 2.0222C3.9419 2.03419 3.5663 1.65859 3.57829 1.18327C3.59028 0.70795 3.98532 0.312907 4.46064 0.300917Z" fill="#A9A8A8"></path>
                </svg>
              </a>
            </div>
          </div>
            '
        ]);

        DB::table('project_translations')->insert([
            'project_id' => '1',
            'name' => 'The International Law in the 21st Century Award',
            'fee' => '5000 euro',
            'description' => '<h1 class="h2 projects-law__title titleObserver">
            The International Law in the 21<sup>st</sup> Century Award
          </h1>
          <div class="video-wrap video-wrap__law">
            <div class="video LazyVideoYt" data-id="crmog_9nqSE" data-alt="" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720&amp;autoplay=1" tabindex="0">
              <div class="video__play h5">
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none">
                  <path d="M0 1.95576C0 1.13999 0.924163 0.667451 1.58549 1.14508L7.87752 5.68932C8.4302 6.08848 8.4302 6.91152 7.87752 7.31068L1.58549 11.8549C0.924163 12.3325 0 11.86 0 11.0442V1.95576Z" fill="white"></path>
                </svg>
                Video
              </div>
            <img class="video__img" src="https://img.youtube.com/vi/crmog_9nqSE/maxresdefault.jpg" alt=""><iframe class="video__iframe" frameborder="0" src="https://www.youtube.com/embed/crmog_9nqSE/?autoplay=1&amp;modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720&amp;autoplay=1" width="100%" height="100%" allow="autoplay" allowfullscreen="allowfullscreen">
            </iframe></div>
            <span class="gray video-wrap__text">
              Video. Successful work for the award — the opinion of leading experts <br>
              Russia, Moscow, Nov 20, 2018. Source: ICLRC
            </span>
          </div>
          <a class="more-link more-link__law link-reset" target="_blank" href="https://www.youtube.com/playlist?list=PLCZofqYXe1mJfNITR9fD6WXOLDeB3oTCA">
            More video
            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
              <g opacity="0.5">
              <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </a>
          <p class="research__text serif-big">
            We are happy to announce the eighth annual International law in the <br>
            21<sup>st</sup> Century Award for the best research paper on public international law!
          </p>
          <p class="research__text serif-big">
            The winner receives the International Law in the 21<sup>st</sup> Century Award, a diploma, and a prize of 300,000 ₽.
          </p>
          <p class="research__text serif-big">
            A group of Russian experts in public international law, including Vladlen Vereschetin, Roman Kolodkin, Sergey Punzhin, Leonid Skotnikov, <br>
            Bakhtiyar Tuzmukhamedov, and Aleksandr Khodakov came up with the <br>
             idea of establishing the Award.
          </p>
          <p class="research__text serif-big">
            The Competition is held annually. It seeks to promote and foster in-depth research in public international law and support original research within <br>
             the field.
          </p>
          <h3 class="projects-law__subtitle">
            Conditions
          </h3>
          <p class="research__text serif-big">
            The Competition is conducted in accordance with the
            <a href="https://iclrc.ru/files/pages/award/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%B5-2021-2022.pdf" class="more-link more-link--text link-reset" target="_blank">
              Regulations <br>
              of the Competition
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                <g opacity="0.5">
                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
            and the
            <a href="https://iclrc.ru/files/pages/award/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA-%D0%BF%D1%80%D0%B8%D1%91%D0%BC%D0%B0-%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%BD%D1%8B%D1%85-%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B0%D0%BB%D0%BE%D0%B2-2021-2022.pdf" class="more-link more-link--text link-reset" target="_blank">
            Submission rules
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                <g opacity="0.5">
                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
            as well as the <br>
            established practice
          </p>
          <ol class="serif-big projects-law__list">
            <li>
              Research papers can be submitted either in Russian or English
               and should address any Public international law issue.
            </li>
            <li>
              The research papers accepted for participation in the competition shall be:
              <ul class="research__list no-gap serif-big">
                <li>
                  prepared by one author;
                </li>
                <li>
                  not published previously, or published no earlier than <br>
                  January 1, 2021;
                </li>
                <li>
                  of 1 ∙ 2 author’s sheets (40,000 ∙ 80,000 characters);
                </li>
                <li>
                  not submitted to the Competition previously (it is not recommended to submit papers substantially repeating those that were previously submitted to the competition);
                </li>
              </ul>
            </li>
            <li>
              Only citizens of the Russian Federation under 35 years old, who     completed higher legal education in law and / or hold a postgraduate degree in law, are eligible to take part in the competition.
            </li>
          </ol>
          <p class="projects-law__text serif-big">
            The winner is selected by the Council of the Award, consisting of international law practitioners and scholars.
          </p>
          <p class="projects-law__text serif-big">
            Assessing submitted papers, the Council of the Award takes into account an in-depth of research in a selected subject, novelty and practical value of findings, the quality of analysis of the applicable law, the usage of up-to-date doctrine, the logic and clarity of writing, and the extent to which thesis statements formulated by an author are well-founded and reasoned.
          </p>
          <p class="projects-law__text serif-big">
            Please, note that plagiarism is unacceptable. The Organizer checks the research papers for plagiarism, including by using special automated systems. The Council of the Award will be informed about cases of plagiarism and incorrect citation.
          </p>
          <p class="projects-law__text serif-big">
            The Library of the ICLRC is open and ready to assist contestants by providing access to literature needed for preparation and submission of their papers (email: <a class="link-reset" href="mailto:prize@iclrc.ru">prize@iclrc.ru</a>)
          </p>',
            'terms' => $faker_en->realText(100, 2),
            'contacts' => '
            <div class="pl-item__text">
                <a href="tel:+74956406565" target="_blank" class="more-link link-reset">
                    +7 495 640 65 65
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pl-item__text">
                <a href="tel:prize@iclrc.ru" target="_blank" class="more-link link-reset">
                    prize@iclrc.ru
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pl-item__text">
                <a href="#" target="_blank" class="more-link link-reset">
                    Facebook
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pl-item__text">
                <a href="#" target="_blank" class="more-link link-reset">
                    Youtube
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            ',
            'locale' => 'en',
        ]);

        DB::table('project_translations')->insert([
            'project_id' => '1',
            'name' => 'The International Law in the 21st Century Award',
            'fee' => '5000 euro',
            'description' => '<h1 class="h2 projects-law__title titleObserver">
            The International Law in the 21<sup>st</sup> Century Award
          </h1>
          <div class="video-wrap video-wrap__law">
            <div class="video LazyVideoYt" data-id="crmog_9nqSE" data-alt="" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720&amp;autoplay=1" tabindex="0">
              <div class="video__play h5">
                <svg width="9" height="13" viewBox="0 0 9 13" fill="none">
                  <path d="M0 1.95576C0 1.13999 0.924163 0.667451 1.58549 1.14508L7.87752 5.68932C8.4302 6.08848 8.4302 6.91152 7.87752 7.31068L1.58549 11.8549C0.924163 12.3325 0 11.86 0 11.0442V1.95576Z" fill="white"></path>
                </svg>
                Video
              </div>
            <img class="video__img" src="https://img.youtube.com/vi/crmog_9nqSE/maxresdefault.jpg" alt=""><iframe class="video__iframe" frameborder="0" src="https://www.youtube.com/embed/crmog_9nqSE/?autoplay=1&amp;modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720&amp;autoplay=1" width="100%" height="100%" allow="autoplay" allowfullscreen="allowfullscreen">
            </iframe></div>
            <span class="gray video-wrap__text">
              Video. Successful work for the award — the opinion of leading experts <br>
              Russia, Moscow, Nov 20, 2018. Source: ICLRC
            </span>
          </div>
          <a class="more-link more-link__law link-reset" target="_blank" href="https://www.youtube.com/playlist?list=PLCZofqYXe1mJfNITR9fD6WXOLDeB3oTCA">
            More video
            <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
              <g opacity="0.5">
              <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
            </svg>
          </a>
          <p class="research__text serif-big">
            We are happy to announce the eighth annual International law in the <br>
            21<sup>st</sup> Century Award for the best research paper on public international law!
          </p>
          <p class="research__text serif-big">
            The winner receives the International Law in the 21<sup>st</sup> Century Award, a diploma, and a prize of 300,000 ₽.
          </p>
          <p class="research__text serif-big">
            A group of Russian experts in public international law, including Vladlen Vereschetin, Roman Kolodkin, Sergey Punzhin, Leonid Skotnikov, <br>
            Bakhtiyar Tuzmukhamedov, and Aleksandr Khodakov came up with the <br>
             idea of establishing the Award.
          </p>
          <p class="research__text serif-big">
            The Competition is held annually. It seeks to promote and foster in-depth research in public international law and support original research within <br>
             the field.
          </p>
          <h3 class="projects-law__subtitle">
            Conditions
          </h3>
          <p class="research__text serif-big">
            The Competition is conducted in accordance with the
            <a href="https://iclrc.ru/files/pages/award/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%B5-2021-2022.pdf" class="more-link more-link--text link-reset" target="_blank">
              Regulations <br>
              of the Competition
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                <g opacity="0.5">
                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
            and the
            <a href="https://iclrc.ru/files/pages/award/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA-%D0%BF%D1%80%D0%B8%D1%91%D0%BC%D0%B0-%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%BD%D1%8B%D1%85-%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%B0%D0%BB%D0%BE%D0%B2-2021-2022.pdf" class="more-link more-link--text link-reset" target="_blank">
            Submission rules
              <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                <g opacity="0.5">
                <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
              </svg>
            </a>
            as well as the <br>
            established practice
          </p>
          <ol class="serif-big projects-law__list">
            <li>
              Research papers can be submitted either in Russian or English
               and should address any Public international law issue.
            </li>
            <li>
              The research papers accepted for participation in the competition shall be:
              <ul class="research__list no-gap serif-big">
                <li>
                  prepared by one author;
                </li>
                <li>
                  not published previously, or published no earlier than <br>
                  January 1, 2021;
                </li>
                <li>
                  of 1 ∙ 2 author’s sheets (40,000 ∙ 80,000 characters);
                </li>
                <li>
                  not submitted to the Competition previously (it is not recommended to submit papers substantially repeating those that were previously submitted to the competition);
                </li>
              </ul>
            </li>
            <li>
              Only citizens of the Russian Federation under 35 years old, who     completed higher legal education in law and / or hold a postgraduate degree in law, are eligible to take part in the competition.
            </li>
          </ol>
          <p class="projects-law__text serif-big">
            The winner is selected by the Council of the Award, consisting of international law practitioners and scholars.
          </p>
          <p class="projects-law__text serif-big">
            Assessing submitted papers, the Council of the Award takes into account an in-depth of research in a selected subject, novelty and practical value of findings, the quality of analysis of the applicable law, the usage of up-to-date doctrine, the logic and clarity of writing, and the extent to which thesis statements formulated by an author are well-founded and reasoned.
          </p>
          <p class="projects-law__text serif-big">
            Please, note that plagiarism is unacceptable. The Organizer checks the research papers for plagiarism, including by using special automated systems. The Council of the Award will be informed about cases of plagiarism and incorrect citation.
          </p>
          <p class="projects-law__text serif-big">
            The Library of the ICLRC is open and ready to assist contestants by providing access to literature needed for preparation and submission of their papers (email: <a class="link-reset" href="mailto:prize@iclrc.ru">prize@iclrc.ru</a>)
          </p>',
            'terms' => $faker_en->realText(100, 2),
            'contacts' => '
            <div class="pl-item__text">
                <a href="tel:+74956406565" target="_blank" class="more-link link-reset">
                    +7 495 640 65 65
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pl-item__text">
                <a href="tel:prize@iclrc.ru" target="_blank" class="more-link link-reset">
                    prize@iclrc.ru
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pl-item__text">
                <a href="#" target="_blank" class="more-link link-reset">
                    Facebook
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="pl-item__text">
                <a href="#" target="_blank" class="more-link link-reset">
                    Youtube
                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                        <g opacity="0.5">
                            <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
            </div>
            ',
            'locale' => 'ru',
        ]);

    }
}