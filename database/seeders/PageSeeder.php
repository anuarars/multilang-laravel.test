<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $about = Page::create([
            'path' => 'about',
            'layout' => 'about',
            'status' => 1
        ]);

        $partners = Page::create([
            'path' => 'partners',
            'layout' => 'partners',
            'status' => 1
        ]);

        $clients = Page::create([
            'path' => 'clients',
            'layout' => 'clients',
            'status' => 1
        ]);

        $transparecy = Page::create([
            'path' => 'transparency',
            'layout' => 'transparency',
            'status' => 1
        ]);

        $people = Page::create([
            'path' => 'people',
            'layout' => 'people',
            'status' => 1
        ]);

        $governance = Page::create([
            'path' => 'governance',
            'layout' => 'governance',
            'status' => 1
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $transparecy->id,
            'locale' => 'en',
            'title' => 'Transparecy',
            'content' => '<section class="our-team pb200">
            <div class="container">
            <ul class="breadcrumbs list-reset">
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                Transparecy
                </li>
                </ul>
              <div class="our-team__head">
                <span class="italic">
                  Documents
                </span>
                <h1 class="our-team__title disclosure-title">
                  Transparency
                </h1>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="disclosure">
                    <h3 class="disclosure__title">
                      Annual reports and <br>
                      results of the year
                    </h3>
                    <p class="disclosure__subtitle">
                      Annual report
                    </p>
                    <div class="disclosure__dates">
                      <span class="gray" tabindex="0">
                        2020
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>
                      <span class="gray" tabindex="0">
                        2019
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>
                      <span class="gray" tabindex="0">
                        2018
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>
                      <span class="gray" tabindex="0">
                        2017
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>

                    </div>
                    <p class="disclosure__subtitle">
                      Results
                    </p>
                    <div class="disclosure__dates">
                      <span class="gray" tabindex="0">
                          2019
                          <a href="#" class="disclosure__link link-reset">
                            View PDF
                            <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                            </svg>
                          </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="disclosure">
                    <h3 class="disclosure__title">
                      Another kind <br>
                      of reports
                    </h3>
                    <p class="disclosure__subtitle">
                      Report on a special assessment of working conditions
                    </p>
                    <div class="disclosure__dates">
                      <span class="gray" tabindex="0">
                        2021
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>

                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="disclosure">
                    <h3 class="disclosure__title">
                      Reports to the Russian <br>
                      ministry of Justice
                    </h3>
                    <p class="disclosure__txt">
                      Reports are published on the Ministry of justice of the Russian Federation information portal on the activities of Non-Profit organizations
                      <a href="https://iclrc.ru/files/pages/award/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%B5-2021-2022.pdf" class="more-link more-link--text link-reset" target="_blank">
                        unro.minjust.ru
                       <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                         <g opacity="0.5">
                         <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                         <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                       </svg>
                     </a>
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </section>
          '
        ]);


        DB::table('page_translations')->insert([
            'page_id' => $transparecy->id,
            'locale' => 'ru',
            'title' => 'Отчетность',
            'content' => '<section class="our-team pb200">
            <div class="container">
            <ul class="breadcrumbs list-reset">
                <li>
                    <a href="/about">О Центре</a>
                </li>
                <li>
                Отчетность
                </li>
                </ul>
              <div class="our-team__head">
                <span class="italic">
                  Прозрачная
                </span>
                <h1 class="our-team__title disclosure-title">
                  ОТЧЕТНОСТЬ
                </h1>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="disclosure">
                    <h3 class="disclosure__title">
                      Annual reports and <br>
                      results of the year
                    </h3>
                    <p class="disclosure__subtitle">
                      Annual report
                    </p>
                    <div class="disclosure__dates">
                      <span class="gray" tabindex="0">
                        2020
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>
                      <span class="gray" tabindex="0">
                        2019
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>
                      <span class="gray" tabindex="0">
                        2018
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>
                      <span class="gray" tabindex="0">
                        2017
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>

                    </div>
                    <p class="disclosure__subtitle">
                      Results
                    </p>
                    <div class="disclosure__dates">
                      <span class="gray" tabindex="0">2019</span>
                      <a href="#" class="disclosure__link link-reset">
                        View PDF
                        <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="disclosure">
                    <h3 class="disclosure__title">
                      Another kind <br>
                      of reports
                    </h3>
                    <p class="disclosure__subtitle">
                      Report on a special assessment of working conditions
                    </p>
                    <div class="disclosure__dates">
                      <span class="gray" tabindex="0">
                        2021
                        <a href="#" class="disclosure__link link-reset">
                          View PDF
                          <svg width="13" height="9" viewBox="0 0 13 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.245718L12.7416 3.90679C13.0861 4.23441 13.0861 4.76559 12.7416 5.09321L8.89101 8.75428C8.54643 9.08191 7.98776 9.08191 7.64318 8.75428C7.2986 8.42666 7.2986 7.89548 7.64318 7.56785L9.98746 5.33893H0.882353C0.395043 5.33893 0 4.96333 0 4.5C0 4.03667 0.395043 3.66107 0.882353 3.66107H9.98746L7.64318 1.43215C7.2986 1.10452 7.2986 0.573341 7.64318 0.245718C7.98776 -0.0819059 8.54643 -0.0819059 8.89101 0.245718Z" fill="#3E3E3E"/>
                          </svg>
                        </a>
                      </span>

                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="disclosure">
                    <h3 class="disclosure__title">
                      Reports to the Russian <br>
                      ministry of Justice
                    </h3>
                    <p class="disclosure__txt">
                      Reports are published on the Ministry of justice of the Russian Federation information portal on the activities of Non-Profit organizations
                      <a href="https://iclrc.ru/files/pages/award/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BA%D0%BE%D0%BD%D0%BA%D1%83%D1%80%D1%81%D0%B5-2021-2022.pdf" class="more-link more-link--text link-reset" target="_blank">
                        unro.minjust.ru
                       <svg width="11" height="11" viewBox="0 0 11 11" fill="none">
                         <g opacity="0.5">
                         <path d="M1.92892 9.07105L9 2" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                         <path d="M5 1H10V6" stroke="#A9A8A8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                         </g>
                       </svg>
                     </a>
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </section>
          '
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $clients->id,
            'locale' => 'en',
            'title' => 'Clients',
            'content' => '
            <section class="clients pb200">
            <div class="container">
              <ul class="breadcrumbs list-reset">
                <li>
                  <a href="/about">About</a>
                </li>
                <li>
                  Clients
                </li>
              </ul>
              <span class="italic">
                Satisfied
              </span>
              <h1 class="clients__title titleObserver">
                CLIENTS
              </h1>
              <div class="row">
                <div class="col-md-4">
                  <picture>
                    <source srcset="/templates/v2/img/chart-mob.svg" media="(max-width: 767px)">
                    <img src="/templates/v2/img/chart.svg" alt="chart">
                  </picture>
                </div>
                <div class="col-md-8">
                  <div class="chart-info">
                    <h4>
                      Share of customers as <br>
                      a percentage by category
                    </h4>
                    <div class="chart-item">
                      <strong>Goverment</strong>
                      <span>64 %</span>
                    </div>
                    <div class="chart-item">
                      <strong>Business</strong>
                      <span>36 %</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="chart__text gray">
                    The ICLRC has held more than 120 research projects for the state bodies and business
                  </p>
                </div>
              </div>
              <h3 class="government-title">
                GoverNment
              </h3>
              <div class="row clients-row">
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Deputy of the State duma of the Federal assembly of the Russian Federation — Vyacheslav Fetisov
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Special rapporteurs of the International law commission
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Special representative of the President of the Russian Federation for International cooperation in the
                      Arctic and Antarctic — Artur Chilingarov
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Analytical center for the Government of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Bank of Russia
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Executive office of the Government of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal agency for air transport
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal agency for fishery
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal agency on technical regulating and metrology
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal national guard service
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal service for supervision of Natural resources
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal tax service
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry for the Development of the Russian Far east and Arctic
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of agriculture of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of economic development of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of finance of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of foreign affairs of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of justice of Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of natural resources and environment of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of transport of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Presidential executive office
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Veb.rf
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      VNII Okeangeologia
                    </p>
                  </div>
                </div>
              </div>
              <h3 class="government-title">
                business
              </h3>
              <div class="row clients-row">
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Eurocement holding AG
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Gazprombank
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Gazprom neft
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      MegaFon
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      PhosAgro
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Skolkovo foundation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Sibur
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Smartseeds
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
            '
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $clients->id,
            'locale' => 'ru',
            'title' => 'Клиенты',
            'content' => '
            <section class="clients pb200">
            <div class="container">
              <ul class="breadcrumbs list-reset">
                <li>
                  <a href="/about">About</a>
                </li>
                <li>
                  Clients
                </li>
              </ul>
              <span class="italic">
                Доверяющие
              </span>
              <h1 class="clients__title titleObserver">
                ЗАКАЗЧИКИ
              </h1>
              <div class="row">
                <div class="col-md-4">
                  <picture>
                    <source srcset="/templates/v2/img/chart-mob.svg" media="(max-width: 767px)">
                    <img src="/templates/v2/img/chart.svg" alt="chart">
                  </picture>
                </div>
                <div class="col-md-8">
                  <div class="chart-info">
                    <h4>
                      Share of customers as <br>
                      a percentage by category
                    </h4>
                    <div class="chart-item">
                      <strong>Goverment</strong>
                      <span>64 %</span>
                    </div>
                    <div class="chart-item">
                      <strong>Business</strong>
                      <span>36 %</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <p class="chart__text gray">
                    The ICLRC has held more than 120 research projects for the state bodies and business
                  </p>
                </div>
              </div>
              <h3 class="government-title">
                GoverNment
              </h3>
              <div class="row clients-row">
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Deputy of the State duma of the Federal assembly of the Russian Federation — Vyacheslav Fetisov
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Special rapporteurs of the International law commission
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Special representative of the President of the Russian Federation for International cooperation in the
                      Arctic and Antarctic — Artur Chilingarov
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Analytical center for the Government of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Bank of Russia
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Executive office of the Government of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal agency for air transport
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal agency for fishery
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal agency on technical regulating and metrology
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal national guard service
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal service for supervision of Natural resources
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Federal tax service
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry for the Development of the Russian Far east and Arctic
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of agriculture of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of economic development of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of finance of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of foreign affairs of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of justice of Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of natural resources and environment of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Ministry of transport of the Russian Federation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      The Presidential executive office
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Veb.rf
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      VNII Okeangeologia
                    </p>
                  </div>
                </div>
              </div>
              <h3 class="government-title">
                business
              </h3>
              <div class="row clients-row">
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Eurocement holding AG
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Gazprombank
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Gazprom neft
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      MegaFon
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      PhosAgro
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Skolkovo foundation
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Sibur
                    </p>
                  </div>
                </div>
                <div class="col-md-4 clients-col">
                  <div class="clients-item">
                    <p class="clients-item__text">
                      Smartseeds
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
            '
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $about->id,
            'locale' => 'en',
            'title' => 'About',
            'content' => '
            <section class="about pb200">
                <div class="container">
                    <div class="row">
                    <div class="col-sm-4">
                        <span class="italic">
                        All the edges of knowledge
                        </span>
                        <h1 class="about__title titleObserver">
                        ABOUT
                        </h1>
                        <ul class="list-reset about__list">
                        <li>
                            <a href="/transparency">Transparency</a>
                        </li>
                        <li>
                            <a href="/governance">Governance</a>
                        </li>
                        <li>
                            <a href="/people">People</a>
                        </li>
                        <li>
                            <a href="/partners">Partners</a>
                        </li>
                        <li>
                            <a href="/clients">Clients</a>
                        </li>
                        <li>
                            <a href="https://iclrc-v2.uprising.agency/ru/media">Media</a>
                        </li>
                        </ul>

                    </div>
                    <div class="col-sm-8">
                        <div class="about__image">
                        <picture>
                            <source srcset="/templates/v2/img/about-image-mob.jpg 1x, /templates/v2/img/about-image-mob@2x.jpg 2x" media="(max-width: 767px)">
                            <img src="/templates/v2/img/about-image.jpg" srcset="/templates/v2/img/about-image.jpg 1x, /templates/v2/img/about-image@2x.jpg 2x" alt="Ekaterina Salugina-Sorokovaya">
                        </picture>
                        <picture>
                            <img src="/templates/v2/img/about-image-hover.jpg" srcset="/templates/v2/img/about-image-hover.jpg 1x, /templates/v2/img/about-image-hover@2x.jpg 2x" alt="about image">
                        </picture>
                        </div>
                    </div>
                    <div class="col-md-4 about__bottom">
                        <aside class="about__aside">
                        <article class="about-item">
                            <h4 class="about__mini-title">
                            Adress
                            </h4>
                            <p class="about__mini-text">
                            14 bldg. 3 <br class="br-mob"> Kadashevskaya <br>
                            Naberezhnaya, Moscow, <br>
                            119017, Russia
                            </p>
                        </article>
                        <article class="about-item about-item--second">
                            <h4 class="about__mini-title">
                            Find us
                            </h4>
                            <ul class="about-list list-reset">
                            <li>
                                <div>
                                <span class="dot"></span>
                                Tretyakovskaya
                                </div>
                                <span>
                                9 min
                                </span>
                            </li>
                            <li>
                                <div>
                                <span class="dot"></span>
                                Novokuznetskya
                                </div>
                                <span>
                                10 min
                                </span>
                            </li>
                            <li>
                                <div>
                                <span class="dot"></span>
                                Polyanka
                                </div>
                                <span>
                                13 min
                                </span>
                            </li>
                            </ul>
                        </article>
                        <article class="about-item">
                            <h4 class="about__mini-title">
                            ICLRS contacts
                            </h4>
                            <p class="about__mini-text">
                            <a href="tel:+7 495 640 65 65">+7 495 640 65 65</a> <br>
                            <a href="mailto:+7 495 640 65 65">info@iclrc.ru</a>
                            </p>
                        </article>
                        <article class="about-item">
                            <h4 class="about__mini-title">
                            Library contacts
                            </h4>
                            <p class="about__mini-text">
                            <a href="tel:+7 495 640 65 65">+7 915 328 24 83</a> <br>
                            <a href="mailto:+7 495 640 65 65">library@iclrc.ru</a>
                            </p>
                        </article>
                        </aside>
                    </div>
                    <div class="col-md-8 about__bottom">
                        <div class="about__group-text">
                        <p class="research__text serif-big">
                            The International and comparative law research center (ICLRC) is one of the leading think tanks specializing in the study of legal issues that are of importance for the Russian Federation. The ICLRC combines a deep under-standing of the Russian state agenda and global trends in the development of law, which allows it to find legal solutions that meet modern challenges with a constant focus on ensuring the national interests of the Russia. The ICLRC creates a platform for the exchange of views, initiates international dialogue, and takes part in the improvement of national jurisdiction.
                        </p>
                        <p class="research__text serif-big">
                            We prepare analytical materials on Public international law, Private international law, Comparative law, as well as interdisciplinary research, involving the best special-ists from various fields of knowledge.
                        </p>
                        <p class="research__text serif-big">
                            The ICLRC’s expertise is in demand by the Russian dele-gations in the most authoritative international organiza-tions:

                            <span class="tooltip-wrap">
                            <button type="button" class="tooltip-word btn-reset">
                                UNCITRAL
                            </button>
                            <span class="tooltip" role="dialog">
                                <button type="button" class="btn-reset tooltip__close">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                </button>
                                <span class="tooltip__text">
                                The United Nations commission on International trade law
                                </span>
                            </span>
                            </span>,
                            <span class="tooltip-wrap">
                            <button type="button" class="tooltip-word btn-reset">
                                UNIDROIT
                            </button>
                            <span class="tooltip" role="dialog">
                                <button type="button" class="btn-reset tooltip__close">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                </button>
                                <span class="tooltip__text">
                                The United Nations commission on International trade law
                                </span>
                            </span>
                            </span>,
                            etc. Also, in 2019, the ICLRC obtained observer status in three UNCITRAL working groups at once — the only organization with this status in three working groups at once.


                        </p>
                        <p class="research__text serif-big">
                            Promoting the study of law is an important area of our activity, as part of which we hold the Summer school on Public international law, organize the contest for the International law in the 21  century award. Our unique library provides access to classical and modern publi-cations on Public and Private international law, as well as Comparative law in various languages, and also to foreign and Russian electronic legal databases.
                        </p>
                        <div class="about__signature">
                            <img src="/templates/v2/img/signature.jpg" srcset="/templates/v2/img/signature.jpg 1x, /templates/v2/img/signature@2x.jpg 2x" alt="signature">
                            <p class="italic">
                            Ekaterina Salugina-Sorokovaya, <br>
                            General director
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $about->id,
            'locale' => 'ru',
            'title' => 'О Центре',
            'content' => '
            <section class="about pb200">
                <div class="container">
                    <div class="row">
                    <div class="col-sm-4">
                        <span class="italic">
                        Информация
                        </span>
                        <h1 class="about__title titleObserver">
                        О ЦЕНТРЕ
                        </h1>
                        <ul class="list-reset about__list">
                            <li>
                                <a href="/transparency">Transparency</a>
                            </li>
                            <li>
                                <a href="/governance">Governance</a>
                            </li>
                            <li>
                                <a href="/people">People</a>
                            </li>
                            <li>
                                <a href="/partners">Partners</a>
                            </li>
                            <li>
                                <a href="/clients">Clients</a>
                            </li>
                            <li>
                                <a href="https://iclrc-v2.uprising.agency/ru/media">Media</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-sm-8">
                        <div class="about__image">
                        <picture>
                            <source srcset="/templates/v2/img/about-image-mob.jpg 1x, /templates/v2/img/about-image-mob@2x.jpg 2x" media="(max-width: 767px)">
                            <img src="/templates/v2/img/about-image.jpg" srcset="/templates/v2/img/about-image.jpg 1x, /templates/v2/img/about-image@2x.jpg 2x" alt="Ekaterina Salugina-Sorokovaya">
                        </picture>
                        <picture>
                            <img src="/templates/v2/img/about-image-hover.jpg" srcset="/templates/v2/img/about-image-hover.jpg 1x, /templates/v2/img/about-image-hover@2x.jpg 2x" alt="about image">
                        </picture>
                        </div>
                    </div>
                    <div class="col-md-4 about__bottom">
                        <aside class="about__aside">
                        <article class="about-item">
                            <h4 class="about__mini-title">
                            Adress
                            </h4>
                            <p class="about__mini-text">
                            14 bldg. 3 <br class="br-mob"> Kadashevskaya <br>
                            Naberezhnaya, Moscow, <br>
                            119017, Russia
                            </p>
                        </article>
                        <article class="about-item about-item--second">
                            <h4 class="about__mini-title">
                            Find us
                            </h4>
                            <ul class="about-list list-reset">
                            <li>
                                <div>
                                <span class="dot"></span>
                                Tretyakovskaya
                                </div>
                                <span>
                                9 min
                                </span>
                            </li>
                            <li>
                                <div>
                                <span class="dot"></span>
                                Novokuznetskya
                                </div>
                                <span>
                                10 min
                                </span>
                            </li>
                            <li>
                                <div>
                                <span class="dot"></span>
                                Polyanka
                                </div>
                                <span>
                                13 min
                                </span>
                            </li>
                            </ul>
                        </article>
                        <article class="about-item">
                            <h4 class="about__mini-title">
                            ICLRS contacts
                            </h4>
                            <p class="about__mini-text">
                            <a href="tel:+7 495 640 65 65">+7 495 640 65 65</a> <br>
                            <a href="mailto:+7 495 640 65 65">info@iclrc.ru</a>
                            </p>
                        </article>
                        <article class="about-item">
                            <h4 class="about__mini-title">
                            Library contacts
                            </h4>
                            <p class="about__mini-text">
                            <a href="tel:+7 495 640 65 65">+7 915 328 24 83</a> <br>
                            <a href="mailto:+7 495 640 65 65">library@iclrc.ru</a>
                            </p>
                        </article>
                        </aside>
                    </div>
                    <div class="col-md-8 about__bottom">
                        <div class="about__group-text">
                        <p class="research__text serif-big">
                            The International and comparative law research center (ICLRC) is one of the leading think tanks specializing in the study of legal issues that are of importance for the Russian Federation. The ICLRC combines a deep under-standing of the Russian state agenda and global trends in the development of law, which allows it to find legal solutions that meet modern challenges with a constant focus on ensuring the national interests of the Russia. The ICLRC creates a platform for the exchange of views, initiates international dialogue, and takes part in the improvement of national jurisdiction.
                        </p>
                        <p class="research__text serif-big">
                            We prepare analytical materials on Public international law, Private international law, Comparative law, as well as interdisciplinary research, involving the best special-ists from various fields of knowledge.
                        </p>
                        <p class="research__text serif-big">
                            The ICLRC’s expertise is in demand by the Russian dele-gations in the most authoritative international organiza-tions:

                            <span class="tooltip-wrap">
                            <button type="button" class="tooltip-word btn-reset">
                                UNCITRAL
                            </button>
                            <span class="tooltip" role="dialog">
                                <button type="button" class="btn-reset tooltip__close">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                </button>
                                <span class="tooltip__text">
                                The United Nations commission on International trade law
                                </span>
                            </span>
                            </span>,
                            <span class="tooltip-wrap">
                            <button type="button" class="tooltip-word btn-reset">
                                UNIDROIT
                            </button>
                            <span class="tooltip" role="dialog">
                                <button type="button" class="btn-reset tooltip__close">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M9 1L1 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1 1L9 9" stroke="#A9A8A8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                </button>
                                <span class="tooltip__text">
                                The United Nations commission on International trade law
                                </span>
                            </span>
                            </span>,
                            etc. Also, in 2019, the ICLRC obtained observer status in three UNCITRAL working groups at once — the only organization with this status in three working groups at once.


                        </p>
                        <p class="research__text serif-big">
                            Promoting the study of law is an important area of our activity, as part of which we hold the Summer school on Public international law, organize the contest for the International law in the 21  century award. Our unique library provides access to classical and modern publi-cations on Public and Private international law, as well as Comparative law in various languages, and also to foreign and Russian electronic legal databases.
                        </p>
                        <div class="about__signature">
                            <img src="/templates/v2/img/signature.jpg" srcset="/templates/v2/img/signature.jpg 1x, /templates/v2/img/signature@2x.jpg 2x" alt="signature">
                            <p class="italic">
                            Ekaterina Salugina-Sorokovaya, <br>
                            General director
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $partners->id,
            'locale' => 'en',
            'title' => 'Partners',
            'content' => '
            <section class="partners pb200">
                <div class="container">
                    <ul class="breadcrumbs list-reset">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        Partners
                    </li>
                    </ul>
                    <div class="partners__top">
                    <span class="italic">
                        Trustworthy
                    </span>
                    <h1 class="partners__title titleObserver">
                        PARTNERS
                    </h1>
                    </div>
                    <div class="row partners__row">
                    <div class="col-12 partners__col">
                        <h3 class="general-title">
                        General Partner
                        </h3>
                        <a href="https://www.gazprombank.ru/en/" class="partner partner--big link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p4.png" srcset="/templates/v2/img/p4.png 1x, /templates/v2/img/p4@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p4h.png" srcset="/templates/v2/img/p4h.png 1x, ./img/p4h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Gazprombank
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </spa
                        </a>
                    </div>

                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://ivanyan.partners/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p11.png" srcset="/templates/v2/img/p11.png 1x, /templates/v2/img/p11@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p11h.png" srcset="/templates/v2/img/p11h.png 1x, /templates/v2/img/p11h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Ivanyan and partners
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="#" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p19.png" srcset="/templates/v2/img/p19.png 1x, /templates/v2/img/p19@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p19h.png" srcset="/templates/v2/img/p19h.png 1x, /templates/v2/img/p19h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Business event to business
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://lfacademy.ru/courses" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p10.png" srcset="/templates/v2/img/p10.png 1x, /templates/v2/img/p10@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p10h.png" srcset="/templates/v2/img/p10h.png 1x, /templates/v2/img/p10h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Legal academy
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://centerarbitr.ru/en/main-page/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p6.png" srcset="/templates/v2/img/p6.png 1x, ./img/p6@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p6h.png" srcset="/templates/v2/img/p6h.png 1x, /templates/v2/img/p6h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Russian arbitration center <br>
                            at the Russian institute of <br>
                            modern arbitration
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://www.iflos.org/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p1.png" srcset="/templates/v2/img/p1.png 1x, /templates/v2/img/p1@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p1h.png" srcset="/templates/v2/img/p1h.png 1x, /templates/v2/img/p1h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            International foundation <br>
                            for the Law of the sea
                        </p>
                        <span class="partner__country gray">
                            Germany
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="http://iihl.org/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p15.png" srcset="/templates/v2/img/p15.png 1x, /templates/v2/img/p15@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p15h.png" srcset="/templates/v2/img/p15h.png 1x, /templates/v2/img/p15h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            International institute <br>
                            of Humanitarian law
                        </p>
                        <span class="partner__country gray">
                            Italy
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://wto.ru/eng/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p7.png" srcset="/templates/v2/img/p7.png 1x, /templates/v2/img/p7@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p7h.png" srcset="/templates/v2/img/p7h.png 1x, /templates/v2/img/p7h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            WTO expertise center
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://en.whu.edu.cn/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p16.png" srcset="/templates/v2/img/p16.png 1x, /templates/v2/img/p16@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p16h.png" srcset="/templates/v2/img/p16h.png 1x, /templates/v2/img/p16h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Wuhan university
                        </p>
                        <span class="partner__country gray">
                            China
                        </span>
                        </a>
                    </div>



                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://pravo.hse.ru/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p3.png" srcset="/templates/v2/img/p3.png 1x, /templates/v2/img/p3@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p3h.png" srcset="/templates/v2/img/p3h.png 1x, /templates/v2/img/p3h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Higher school of econo- <br>
                            mics: the faculty of law
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://spblegalforum.ru/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p9.png" srcset="/templates/v2/img/p9.png 1x, /templates/v2/img/p9@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p9h.png" srcset="/templates/v2/img/p9h.png 1x, /templates/v2/img/p9h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            St. Petersburg State <br>
                            University
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="http://russianpolar.ru/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p13.png" srcset="/templates/v2/img/p13.png 1x, /templates/v2/img/p13@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p13h.png" srcset="/templates/v2/img/p13h.png 1x, /templates/v2/img/p13h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Russian polar initiative <br>
                            research and information <br>
                            center
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="http://rc-law.ru/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p17.png" srcset="/templates/v2/img/p17.png 1x, /templates/v2/img/p17@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p17h.png" srcset="/templates/v2/img/p17h.png 1x, /templates/v2/img/p17h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Russia-China law society
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://en.hsti.uz/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p5.png" srcset="/templates/v2/img/p5.png 1x, /templates/v2/img/p5@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p5h.png" srcset="/templates/v2/img/p5h.png 1x, /templates/v2/img/p5h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Research institute of legal <br>
                            policy under Ministry of <br>
                            justice of the Republic of <br>
                            Uzbekistan
                        </p>
                        <span class="partner__country gray">
                            Uzbekistan
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://bcicl.org/?lang=en" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p2.png" srcset="/templates/v2/img/p2.png 1x, /templates/v2/img/p2@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p2h.png" srcset="/templates/v2/img/p2h.png 1x, /templates/v2/img/p2h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Bishkek center of Interna- <br>
                            tional and comparative
                            law
                        </p>
                        <span class="partner__country gray">
                            Kyrgyzstan
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://www.novsu.ru/english/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p8.png" srcset="/templates/v2/img/p8.png 1x, /templates/v2/img/p8@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p8h.png" srcset="/templates/v2/img/p8h.png 1x, /templates/v2/img/p8h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Yaroslav-the-Wise Nov- <br>
                            gorod state university
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>

                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://academia.ilpp.ru/ij/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p12.png" srcset="/templates/v2/img/p12.png 1x, /templates/v2/img/p12@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p12h.png" srcset="/templates/v2/img/p12h.png 1x, /templates/v2/img/p12h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            International justice journal
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>


                    </div>
                </div>
                </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $partners->id,
            'locale' => 'ru',
            'title' => 'Партнеры',
            'content' => '
            <section class="partners pb200">
                <div class="container">
                    <ul class="breadcrumbs list-reset">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        Partners
                    </li>
                    </ul>
                    <div class="partners__top">
                    <span class="italic">
                        Надежные
                    </span>
                    <h1 class="partners__title titleObserver">
                        ПАРТНЕРЫ
                    </h1>
                    </div>
                    <div class="row partners__row">
                    <div class="col-12 partners__col">
                        <h3 class="general-title">
                        General Partner
                        </h3>
                        <a href="https://www.gazprombank.ru/en/" class="partner partner--big link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p4.png" srcset="/templates/v2/img/p4.png 1x, /templates/v2/img/p4@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p4h.png" srcset="/templates/v2/img/p4h.png 1x, ./img/p4h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Gazprombank
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>

                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://ivanyan.partners/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p11.png" srcset="/templates/v2/img/p11.png 1x, /templates/v2/img/p11@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p11h.png" srcset="/templates/v2/img/p11h.png 1x, /templates/v2/img/p11h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Ivanyan and partners
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="#" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p19.png" srcset="/templates/v2/img/p19.png 1x, /templates/v2/img/p19@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p19h.png" srcset="/templates/v2/img/p19h.png 1x, /templates/v2/img/p19h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Business event to business
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://lfacademy.ru/courses" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p10.png" srcset="/templates/v2/img/p10.png 1x, /templates/v2/img/p10@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p10h.png" srcset="/templates/v2/img/p10h.png 1x, /templates/v2/img/p10h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Legal academy
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://centerarbitr.ru/en/main-page/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p6.png" srcset="/templates/v2/img/p6.png 1x, ./img/p6@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p6h.png" srcset="/templates/v2/img/p6h.png 1x, /templates/v2/img/p6h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Russian arbitration center <br>
                            at the Russian institute of <br>
                            modern arbitration
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://www.iflos.org/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p1.png" srcset="/templates/v2/img/p1.png 1x, /templates/v2/img/p1@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p1h.png" srcset="/templates/v2/img/p1h.png 1x, /templates/v2/img/p1h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            International foundation <br>
                            for the Law of the sea
                        </p>
                        <span class="partner__country gray">
                            Germany
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="http://iihl.org/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p15.png" srcset="/templates/v2/img/p15.png 1x, /templates/v2/img/p15@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p15h.png" srcset="/templates/v2/img/p15h.png 1x, /templates/v2/img/p15h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            International institute <br>
                            of Humanitarian law
                        </p>
                        <span class="partner__country gray">
                            Italy
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://wto.ru/eng/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p7.png" srcset="/templates/v2/img/p7.png 1x, /templates/v2/img/p7@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p7h.png" srcset="/templates/v2/img/p7h.png 1x, /templates/v2/img/p7h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            WTO expertise center
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://en.whu.edu.cn/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p16.png" srcset="/templates/v2/img/p16.png 1x, /templates/v2/img/p16@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p16h.png" srcset="/templates/v2/img/p16h.png 1x, /templates/v2/img/p16h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Wuhan university
                        </p>
                        <span class="partner__country gray">
                            China
                        </span>
                        </a>
                    </div>



                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://pravo.hse.ru/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p3.png" srcset="/templates/v2/img/p3.png 1x, /templates/v2/img/p3@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p3h.png" srcset="/templates/v2/img/p3h.png 1x, /templates/v2/img/p3h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Higher school of econo- <br>
                            mics: the faculty of law
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://spblegalforum.ru/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p9.png" srcset="/templates/v2/img/p9.png 1x, /templates/v2/img/p9@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p9h.png" srcset="/templates/v2/img/p9h.png 1x, /templates/v2/img/p9h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            St. Petersburg State <br>
                            University
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="http://russianpolar.ru/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p13.png" srcset="/templates/v2/img/p13.png 1x, /templates/v2/img/p13@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p13h.png" srcset="/templates/v2/img/p13h.png 1x, /templates/v2/img/p13h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Russian polar initiative <br>
                            research and information <br>
                            center
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="http://rc-law.ru/en/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p17.png" srcset="/templates/v2/img/p17.png 1x, /templates/v2/img/p17@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p17h.png" srcset="/templates/v2/img/p17h.png 1x, /templates/v2/img/p17h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Russia-China law society
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://en.hsti.uz/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p5.png" srcset="/templates/v2/img/p5.png 1x, /templates/v2/img/p5@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p5h.png" srcset="/templates/v2/img/p5h.png 1x, /templates/v2/img/p5h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Research institute of legal <br>
                            policy under Ministry of <br>
                            justice of the Republic of <br>
                            Uzbekistan
                        </p>
                        <span class="partner__country gray">
                            Uzbekistan
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://bcicl.org/?lang=en" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p2.png" srcset="/templates/v2/img/p2.png 1x, /templates/v2/img/p2@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p2h.png" srcset="/templates/v2/img/p2h.png 1x, /templates/v2/img/p2h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Bishkek center of Interna- <br>
                            tional and comparative
                            law
                        </p>
                        <span class="partner__country gray">
                            Kyrgyzstan
                        </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://www.novsu.ru/english/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p8.png" srcset="/templates/v2/img/p8.png 1x, /templates/v2/img/p8@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p8h.png" srcset="/templates/v2/img/p8h.png 1x, /templates/v2/img/p8h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            Yaroslav-the-Wise Nov- <br>
                            gorod state university
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>

                    <div class="col-sm-3 col-6 partners__col">
                        <a href="https://academia.ilpp.ru/ij/" class="partner link-reset">
                        <div class="partner__top">
                            <img class="partner__img" src="/templates/v2/img/p12.png" srcset="/templates/v2/img/p12.png 1x, /templates/v2/img/p12@2x.png 2x" alt="partner image">
                            <img class="partner__img-hover" src="/templates/v2/img/p12h.png" srcset="/templates/v2/img/p12h.png 1x, /templates/v2/img/p12h@2x.png 2x" alt="partner image">
                        </div>
                        <p class="partner__name">
                            International justice journal
                        </p>
                        <span class="partner__country gray">
                            Russia
                        </span>
                        </a>
                    </div>


                    </div>
                </div>
            </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $people->id,
            'locale' => 'ru',
            'title' => 'People',
            'content' => '
            <section class="people pb200">
            <div class="container">
                <ul class="breadcrumbs list-reset">
                <li>
                    <a href="/about">О Центре</a>
                </li>
                <li>
                    Люди
                </li>
                </ul>
                <span class="italic">
                Эксперты международного права
                </span>
                <h1 class="people__title">
                ЛЮДИ
                </h1>
                <div class="people-team">
                <a href="/our-team" class="people-title link-reset">
                    <h3>
                    Our team
                    </h3>
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z" fill="#3E3E3E"/>
                    </svg>
                </a>
                <div class="people-team__row">
                    <div class="p-item">
                    <img src="/templates/v2/img/pot1.png" srcset="/templates/v2/img/pot1.png 1x, /templates/v2/img/pot1@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Ekaterina
                        Salugina-
                        Sorokovay
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot2.png" srcset="/templates/v2/img/pot2.png 1x, /templates/v2/img/pot2@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Roman
                        Kolodkin
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot3.png" srcset="/templates/v2/img/pot3.png 1x, /templates/v2/img/pot3@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Jean-Claude
                        Knebeler
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot4.png" srcset="/templates/v2/img/pot4.png 1x, /templates/v2/img/pot4@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Victoria
                        Mañko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot5.png" srcset="/templates/v2/img/pot5.png 1x, /templates/v2/img/pot5@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Alexander
                        Beriev
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot6.png" srcset="/templates/v2/img/pot6.png 1x, /templates/v2/img/pot6@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Olga
                        Melnichenko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot7.png" srcset="/templates/v2/img/pot7.png 1x, /templates/v2/img/pot7@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Egor
                        Fedorov
                    </strong>
                    </div>
                </div>
                </div>
                <div class="people-experts">
                <a href="/experts" class="people-title people-title--mini link-reset">
                    <h3>
                    Speakers and Experts
                    </h3>
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z" fill="#3E3E3E"/>
                    </svg>
                </a>
                <div class="people-team__row">
                    <div class="p-item">
                    <img src="/templates/v2/img/pse1.png" srcset="/templates/v2/img/pse1.png 1x, /templates/v2/img/pse1@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Ekaterina
                        Salugina-
                        Sorokovay
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse2.png" srcset="/templates/v2/img/pse2.png 1x, /templates/v2/img/pse2@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Roman
                        Kolodkin
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse3.png" srcset="/templates/v2/img/pse3.png 1x, /templates/v2/img/pse3@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Jean-Claude
                        Knebeler
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse4.png" srcset="/templates/v2/img/pse4.png 1x, /templates/v2/img/pse4@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Victoria
                        Mañko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse5.png" srcset="/templates/v2/img/pse5.png 1x, /templates/v2/img/pse5@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Alexander
                        Beriev
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse6.png" srcset="/templates/v2/img/pse6.png 1x, /templates/v2/img/pse6@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Olga
                        Melnichenko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse7.png" srcset="/templates/v2/img/pse7.png 1x, /templates/v2/img/pse7@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Egor
                        Fedorov
                    </strong>
                    </div>
                </div>
                </div>
            </div>
            </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $people->id,
            'locale' => 'en',
            'title' => 'People',
            'content' => '
            <section class="people pb200">
            <div class="container">
                <ul class="breadcrumbs list-reset">
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    People
                </li>
                </ul>
                <span class="italic">
                International law experts
                </span>
                <h1 class="people__title">
                PEOPLE
                </h1>
                <div class="people-team">
                <a href="/our-team" class="people-title link-reset">
                    <h3>
                    Our team
                    </h3>
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z" fill="#3E3E3E"/>
                    </svg>
                </a>
                <div class="people-team__row">
                    <div class="p-item">
                    <img src="/templates/v2/img/pot1.png" srcset="/templates/v2/img/pot1.png 1x, /templates/v2/img/pot1@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Ekaterina
                        Salugina-
                        Sorokovay
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot2.png" srcset="/templates/v2/img/pot2.png 1x, /templates/v2/img/pot2@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Roman
                        Kolodkin
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot3.png" srcset="/templates/v2/img/pot3.png 1x, /templates/v2/img/pot3@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Jean-Claude
                        Knebeler
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot4.png" srcset="/templates/v2/img/pot4.png 1x, /templates/v2/img/pot4@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Victoria
                        Mañko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot5.png" srcset="/templates/v2/img/pot5.png 1x, /templates/v2/img/pot5@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Alexander
                        Beriev
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot6.png" srcset="/templates/v2/img/pot6.png 1x, /templates/v2/img/pot6@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Olga
                        Melnichenko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pot7.png" srcset="/templates/v2/img/pot7.png 1x, /templates/v2/img/pot7@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Egor
                        Fedorov
                    </strong>
                    </div>
                </div>
                </div>
                <div class="people-experts">
                <a href="/experts" class="people-title people-title--mini link-reset">
                    <h3>
                    Speakers and Experts
                    </h3>
                    <svg width="13" height="10" viewBox="0 0 13 10" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89101 0.745718L12.7416 4.40679C13.0861 4.73441 13.0861 5.26559 12.7416 5.59321L8.89101 9.25428C8.54643 9.58191 7.98776 9.58191 7.64318 9.25428C7.2986 8.92666 7.2986 8.39548 7.64318 8.06785L9.98746 5.83893H0.882353C0.395043 5.83893 0 5.46333 0 5C0 4.53667 0.395043 4.16107 0.882353 4.16107H9.98746L7.64318 1.93215C7.2986 1.60452 7.2986 1.07334 7.64318 0.745718C7.98776 0.418094 8.54643 0.418094 8.89101 0.745718Z" fill="#3E3E3E"/>
                    </svg>
                </a>
                <div class="people-team__row">
                    <div class="p-item">
                    <img src="/templates/v2/img/pse1.png" srcset="/templates/v2/img/pse1.png 1x, /templates/v2/img/pse1@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Ekaterina
                        Salugina-
                        Sorokovay
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse2.png" srcset="/templates/v2/img/pse2.png 1x, /templates/v2/img/pse2@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Roman
                        Kolodkin
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse3.png" srcset="/templates/v2/img/pse3.png 1x, /templates/v2/img/pse3@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Jean-Claude
                        Knebeler
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse4.png" srcset="/templates/v2/img/pse4.png 1x, /templates/v2/img/pse4@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Victoria
                        Mañko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse5.png" srcset="/templates/v2/img/pse5.png 1x, /templates/v2/img/pse5@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Alexander
                        Beriev
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse6.png" srcset="/templates/v2/img/pse6.png 1x, /templates/v2/img/pse6@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Olga
                        Melnichenko
                    </strong>
                    </div>
                    <div class="p-item">
                    <img src="/templates/v2/img/pse7.png" srcset="/templates/v2/img/pse7.png 1x, /templates/v2/img/pse7@2x.png 2x" alt="people image">
                    <strong class="p-item__title">
                        Egor
                        Fedorov
                    </strong>
                    </div>
                </div>
                </div>
            </div>
            </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $governance->id,
            'locale' => 'en',
            'title' => 'Governance',
            'content' => '
            <section class="gov pb200">
                <div class="container">
                    <ul class="breadcrumbs list-reset">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        Governance
                    </li>
                    </ul>
                    <span class="italic">
                    Clear structure of
                    </span>
                    <h1 class="gov__title">
                    GOVERNANCE
                    </h1>
                    <div class="gov-items">
                    <div class="gov-item">
                        <div class="gov-item__left">
                        <span class="gov-item__count">
                            01
                        </span>
                        <div class="gov-item__info">
                            <h4>
                            Foundation for Legal <br>
                            Education and Research
                            </h4>
                            <p>
                            Founder
                            </p>
                        </div>
                        </div>
                        <div class="gov-item__right">
                        <div class="gov-item__text">
                            <ul>
                            <li>
                                Forms the Supervisory Board and appoints its members
                            </li>
                            <li>
                                Oversees the Center’s activities
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="gov-item">
                        <div class="gov-item__left">
                        <span class="gov-item__count">
                            02
                        </span>
                        <div class="gov-item__info">
                            <h4>
                            Supervisory Board
                            </h4>
                            <p>
                            Supreme Collegiate <br>
                            Governing Body
                            </p>
                        </div>
                        </div>
                        <div class="gov-item__right">
                        <div class="gov-item__text">
                            <div class="gov-item__group">
                            <ul>
                                <li>
                                Determines the Center’s priority areas of work
                                </li>
                                <li>
                                Organizes and supervises the Center’s work, monitors the <br>
                                implementation of the Supervisory Board’s decisions
                                </li>
                            </ul>
                            </div>
                            <div class="gov-item__group">
                            <p>
                                Chairman of the Supervisory Board:
                            </p>
                            <ul>
                                <li>Elena Borisenko – Deputy Chairwoman of the Management Board, Gazprombank JSC</li>
                            </ul>
                            <p>
                                Members of the Supervisory Board:
                            </p>
                            <ul>
                                <li>Ilya Kryzhanovsky — Director, Foundation for Legal Education and Research</li>
                                <li>Olga Motenko — General Director, BE2B Ltd</li>
                                <li>Igor Rusanov —  Deputy Chairman of the Management Board, Gazprombank JSC</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="gov-item">
                        <div class="gov-item__left">
                        <span class="gov-item__count">
                            03
                        </span>
                        <div class="gov-item__info">
                            <h4>
                            General Director
                            </h4>
                            <p>
                            Sole Executive Body
                            </p>
                        </div>
                        </div>
                        <div class="gov-item__right">
                        <div class="gov-item__text">
                            <div class="gov-item__group">
                            <ul>
                                <li>
                                Manages the Center’s current activities
                                </li>
                                <li>
                                Ensures implementation of the Supervisory Board’s decisions
                                </li>
                            </ul>
                            </div>
                            <div class="gov-item__group">
                            <ul>
                                <li>Ekaterina Salugina-Sorokovaya</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);

        DB::table('page_translations')->insert([
            'page_id' => $governance->id,
            'locale' => 'ru',
            'title' => 'Governance',
            'content' => '
            <section class="gov pb200">
                <div class="container">
                    <ul class="breadcrumbs list-reset">
                    <li>
                        <a href="/about">О Центре</a>
                    </li>
                    <li>
                    Органы управления
                    </li>
                    </ul>
                    <span class="italic">
                    Прозрачная структура
                    </span>
                    <h1 class="gov__title">
                    ОРГАНЫ УПРАВЛЕНИЯ
                    </h1>
                    <div class="gov-items">
                    <div class="gov-item">
                        <div class="gov-item__left">
                        <span class="gov-item__count">
                            01
                        </span>
                        <div class="gov-item__info">
                            <h4>
                            Foundation for Legal <br>
                            Education and Research
                            </h4>
                            <p>
                            Founder
                            </p>
                        </div>
                        </div>
                        <div class="gov-item__right">
                        <div class="gov-item__text">
                            <ul>
                            <li>
                                Forms the Supervisory Board and appoints its members
                            </li>
                            <li>
                                Oversees the Center’s activities
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="gov-item">
                        <div class="gov-item__left">
                        <span class="gov-item__count">
                            02
                        </span>
                        <div class="gov-item__info">
                            <h4>
                            Supervisory Board
                            </h4>
                            <p>
                            Supreme Collegiate <br>
                            Governing Body
                            </p>
                        </div>
                        </div>
                        <div class="gov-item__right">
                        <div class="gov-item__text">
                            <div class="gov-item__group">
                            <ul>
                                <li>
                                Determines the Center’s priority areas of work
                                </li>
                                <li>
                                Organizes and supervises the Center’s work, monitors the <br>
                                implementation of the Supervisory Board’s decisions
                                </li>
                            </ul>
                            </div>
                            <div class="gov-item__group">
                            <p>
                                Chairman of the Supervisory Board:
                            </p>
                            <ul>
                                <li>Elena Borisenko – Deputy Chairwoman of the Management Board, Gazprombank JSC</li>
                            </ul>
                            <p>
                                Members of the Supervisory Board:
                            </p>
                            <ul>
                                <li>Ilya Kryzhanovsky — Director, Foundation for Legal Education and Research</li>
                                <li>Olga Motenko — General Director, BE2B Ltd</li>
                                <li>Igor Rusanov —  Deputy Chairman of the Management Board, Gazprombank JSC</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="gov-item">
                        <div class="gov-item__left">
                        <span class="gov-item__count">
                            03
                        </span>
                        <div class="gov-item__info">
                            <h4>
                            General Director
                            </h4>
                            <p>
                            Sole Executive Body
                            </p>
                        </div>
                        </div>
                        <div class="gov-item__right">
                        <div class="gov-item__text">
                            <div class="gov-item__group">
                            <ul>
                                <li>
                                Manages the Center’s current activities
                                </li>
                                <li>
                                Ensures implementation of the Supervisory Board’s decisions
                                </li>
                            </ul>
                            </div>
                            <div class="gov-item__group">
                            <ul>
                                <li>Ekaterina Salugina-Sorokovaya</li>
                            </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                </section>
          ',
            'meta_title' => null,
            'meta_keywords' => null,
            'meta_description' => null
        ]);
    }
}
