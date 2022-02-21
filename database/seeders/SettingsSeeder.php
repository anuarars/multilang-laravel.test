<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Contacts'],
            ['name' => 'Copyright'],
            ['name' => 'Slogan'],
            ['name' => 'SmallSlogan'],
            ['name' => 'Privacy']
        ];

        DB::table('settings')->insert($data);

        DB::table('setting_translations')->insert([
            [
                'settings_id' => 1,
                'locale' => 'ru',
                'content' => '
                    14 bldg. 3<br>
                    Kadashevskaya<br>
                    Naberezhnaya, <br>
                    Moscow, 119017, <br>
                    Russia
                '
            ],
            [
                'settings_id' => 1,
                'locale' => 'en',
                'content' => '
                    14 bldg. 3<br>
                    Kadashevskaya<br>
                    Naberezhnaya, <br>
                    Moscow, 119017, <br>
                    Russia
                '
            ],
            [
                'settings_id' => 2,
                'locale' => 'ru',
                'content' => 'Все материалы, публикации, научные работы, изображения, визуалы, инфографика и т.д. защищены Российскими, Американскими и международными законами об авторском праве. Копирование, воспроизведение и распространение  материалов без письменного разрешения Центра международных и сравнительно-правовых исследований или аффилированных лиц строго запрещено. Пожалуйста свяжитесь с нами чтобы узнать больше.'
            ],
            [
                'settings_id' => 2,
                'locale' => 'en',
                'content' => 'All the materials, publications, scientific papers, pictures, visuals, infographics etc. are protected by Russian, U.S. and international copyright laws. Copying, reproduction, and distribution of the materials without written permission of ICLRC or affiliates is strictly prohibited. Please contact us to learn more.'
            ],
            [
                'settings_id' => 3,
                'locale' => 'ru',
                'content' => 'RESEARCH <br>DIALOGUE<br>EVOLUTION'
            ],
            [
                'settings_id' => 3,
                'locale' => 'en',
                'content' => 'RESEARCH <br>DIALOGUE<br>EVOLUTION'
            ],
            [
                'settings_id' => 4,
                'locale' => 'ru',
                'content' => '<blockquote class="footer-quote">
                Environment of knowledge, <br>
                competency, and dialogue <br>
                on matters of law
              </blockquote>'
            ],
            [
                'settings_id' => 4,
                'locale' => 'en',
                'content' => '<blockquote class="footer-quote">
                Environment of knowledge, <br>
                competency, and dialogue <br>
                on matters of law
              </blockquote>'
            ],
            [
                'settings_id' => 5,
                'locale' => 'ru',
                'content' => '
                <a href="#" class="more-link link-reset">
                            Privacy Policy
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.46064 0.301039L9.77216 0.167051C10.2475 0.155062 10.6231 0.530665 10.6111 1.00598L10.4771 6.3175C10.4651 6.79282 10.0701 7.18787 9.59475 7.19986C9.11944 7.21185 8.74383 6.83624 8.75582 6.36092L8.8374 3.12718L2.39911 9.56546C2.05453 9.91004 1.5096 9.92379 1.18198 9.59617C0.854357 9.26854 0.868103 8.72361 1.21268 8.37903L7.65097 1.94075L4.41722 2.02232C3.9419 2.03431 3.5663 1.65871 3.57829 1.18339C3.59028 0.708072 3.98532 0.313029 4.46064 0.301039Z"
                                    fill="#A9A8A8" />
                            </svg>
                        </a>
                        <a href="#" class="more-link link-reset">
                            Public Offer
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.46064 0.301039L9.77216 0.167051C10.2475 0.155062 10.6231 0.530665 10.6111 1.00598L10.4771 6.3175C10.4651 6.79282 10.0701 7.18787 9.59475 7.19986C9.11944 7.21185 8.74383 6.83624 8.75582 6.36092L8.8374 3.12718L2.39911 9.56546C2.05453 9.91004 1.5096 9.92379 1.18198 9.59617C0.854357 9.26854 0.868103 8.72361 1.21268 8.37903L7.65097 1.94075L4.41722 2.02232C3.9419 2.03431 3.5663 1.65871 3.57829 1.18339C3.59028 0.708072 3.98532 0.313029 4.46064 0.301039Z"
                                    fill="#A9A8A8" />
                            </svg>
                        </a>
                '
            ],
            [
                'settings_id' => 5,
                'locale' => 'en',
                'content' => '
                <a href="#" class="more-link link-reset">
                            Privacy Policy
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.46064 0.301039L9.77216 0.167051C10.2475 0.155062 10.6231 0.530665 10.6111 1.00598L10.4771 6.3175C10.4651 6.79282 10.0701 7.18787 9.59475 7.19986C9.11944 7.21185 8.74383 6.83624 8.75582 6.36092L8.8374 3.12718L2.39911 9.56546C2.05453 9.91004 1.5096 9.92379 1.18198 9.59617C0.854357 9.26854 0.868103 8.72361 1.21268 8.37903L7.65097 1.94075L4.41722 2.02232C3.9419 2.03431 3.5663 1.65871 3.57829 1.18339C3.59028 0.708072 3.98532 0.313029 4.46064 0.301039Z"
                                    fill="#A9A8A8" />
                            </svg>
                        </a>
                        <a href="#" class="more-link link-reset">
                            Public Offer
                            <svg width="11" height="10" viewBox="0 0 11 10" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.46064 0.301039L9.77216 0.167051C10.2475 0.155062 10.6231 0.530665 10.6111 1.00598L10.4771 6.3175C10.4651 6.79282 10.0701 7.18787 9.59475 7.19986C9.11944 7.21185 8.74383 6.83624 8.75582 6.36092L8.8374 3.12718L2.39911 9.56546C2.05453 9.91004 1.5096 9.92379 1.18198 9.59617C0.854357 9.26854 0.868103 8.72361 1.21268 8.37903L7.65097 1.94075L4.41722 2.02232C3.9419 2.03431 3.5663 1.65871 3.57829 1.18339C3.59028 0.708072 3.98532 0.313029 4.46064 0.301039Z"
                                    fill="#A9A8A8" />
                            </svg>
                        </a>
                '
            ],
        ]);
    }
}
