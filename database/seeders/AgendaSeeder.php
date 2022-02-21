<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('agendas')->insert([
            [
            'id' => 1,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag1.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/1.png'
            ],
            [
            'id' => 2,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag2.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/covid.png'
            ],
            [
            'id' => 3,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag3.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/sustain.png'
            ],
            [
            'id' => 4,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag4.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/world_ocean.png'
            ],
            [
            'id' => 5,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag5.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/arctic.png'
            ],
            [
            'id' => 6,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag6.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/trade.pnp'
            ],
            [
            'id' => 7,
            'image' => 'https://iclrc-v2.uprising.agency/templates/v2/img/ag7.png',
            'image_main' => 'https://iclrc-v2.uprising.agency/templates/v2/img/agenda/digitalization.png'
            ],
        ]);

        DB::table('agenda_translations')->insert([
            [
                'agenda_id' => 1,
                'locale' => 'ru',
                'name' => 'Общие вопросы международного права',
                'short_description' => 
                'Центр проводит исследования по темам источников международного права, международной ответственности, санкций и юрисдикционных иммунитетов. Эксперты Центра готовят заключения по актуальным правовым проблемам, рассматриваемым на различных международных площадках, для возможного использования российскими государственными органами, представителями бизнеса, экспертного сообщества и иными заинтересованными субъектами.',
                'description' => '
                    <div class="agenda-item__text serif-big">
                        The Center conducts research on <br>
                        the sources of international law, <br>
                        international responsibility, <br>
                        sanctions, and jurisdictional <br>
                        immunities. The Centers experts <br>
                        prepare opinions on topical legal
                    </div>
                    <div class="agenda-item__text serif-big">
                        issues considered at various<br>
                        international venues for the<br>
                        Russian government agencies,<br>
                        business representatives, the<br>
                        expert community, and other <br>
                        interested parties.
                    </div>
                '
            ],
            [
                'agenda_id' => 1,
                'locale' => 'en',
                'name' => 'General issues of International law',
                'short_description' => 
                'The ICLRC conducts research on the sources of international law, interna-tional responsibility, sanctions, and jurisdictional immunities. The ICLRSs experts prepare opinions on topical legal issues considered at various international venues for the Russian government agencies, business representatives, the expert commu-nity, and other interested parties',
                'description' => '
                    <div class="agenda-item__text serif-big">
                        The Center conducts research on <br>
                        the sources of international law, <br>
                        international responsibility, <br>
                        sanctions, and jurisdictional <br>
                        immunities. The Centers experts <br>
                        prepare opinions on topical legal
                    </div>
                    <div class="agenda-item__text serif-big">
                        issues considered at various<br>
                        international venues for the<br>
                        Russian government agencies,<br>
                        business representatives, the<br>
                        expert community, and other <br>
                        interested parties.
                    </div>
                '
            ],
            [
                'agenda_id' => 2,
                'locale' => 'ru',
                'name' => 'Covid-19',
                'short_description' => 
                '
                    Пандемия COVID-19 стала глобальным вызовом для человечества, актуализировав вопрос о соответствии современным реалиям нормативно-правового регулирования по целому ряду вопросов как на международном, так и на национальном уровнях. Центр анализирует лучшие подходы и практики, предлагает новые ориентиры и механизмы для более эффективного реагирования на чрезвычайные ситуации, в том числе в сфере здравоохранения, в будущем. Вместе с государственными органами, международными организациями, в том числе UNCITRAL [Комиссия ООН по праву международной торговли], и экспертным сообществом Центр участвует в обсуждении и решении соответствующих проблем.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 2,
                'locale' => 'en',
                'name' => 'Covid-19',
                'short_description' => 
                '
                    The COVID ∙ 19 pandemic has become a global challenge for hu-manity. It aсtualized the question of relevance to present realities of exist-ing regulation of a variety of issues, both at the international and national levels. The ICLRC analyzes best ap-proaches and practices, proposes new guidelines and mechanisms for better response to emergencies, including in the health sector, in the future. Together with government agencies, international organizations, including UNCITRAL, and the expert community the ICLRC participates in the discussion and solution of relevant problems.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 3,
                'locale' => 'ru',
                'name' => 'Устойчивое развитие',
                'short_description' => 
                '       
                Одним из приоритетов деятельности Центра является продвижение экспертной повестки в области устойчивого развития. Ключевые темы в этом контексте — международное и иностранное «климатическое» регулирование, стратегии бизнеса по снижению углеродоёмкости процессов, правовые механизмы для минимизации потенциальных социально-экономических рисков. Центр активно принимает участие в экспертном сопровождении процессов совершенствования законодательства. Центр — единственная российская организация, получившая статус поддерживающей организации UNEP FI.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 3,
                'locale' => 'en',
                'name' => 'Sustainable development',
                'short_description' => 
                ' 
                One of the ICLRC’s priorities is to promote the expert agenda in the field of sustainable development. Key topics in this context are international and foreign climate regulation, busi-ness strategies to reduce carbon intensity of their processes, legal mechanisms to minimize potential social and economic risks. The ICLRC actively participates in expert support of legislation improvement process. The ICLRC is the only Russian organization that has received the status of the UNEP FI Supporting Institution.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 4,
                'locale' => 'ru',
                'name' => 'Мировой океан',
                'short_description' => 
                '       
                Центр анализирует вопросы, связанные с режимами различных морских пространств согласно Конвенции ООН по морскому праву, разведкой и разработкой минеральных ресурсов за пределами национальной юрисдикции, последствиями повышения уровня моря для прибрежных государств. С 2018 года Центр на постоянной основе консультирует делегацию Российской Федерации в ISA [Международный орган по морскому дну] по различным вопросам, возникающим в контексте работы над проектом Правил разработки минеральных ресурсов Района [Дно морей и океанов и его недра за пределами национальной юрисдикции (статья 1 (1) Конвенции ООН по морскому праву)]. Материалы Центра используются российской делегацией при переговорах и публикуются на сайте ISA. В рамках работы по данному направлению Центр также в 2019 году принял участие в подготовке предложений по разработке российского законодательства, регулирующего деятельность в Районе.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 4,
                'locale' => 'en',
                'name' => 'World ocean',
                'short_description' => 
                ' 
            The ICLRC analyzes issues related to the regimes of various maritime spaces under the UN Convention on the Law of the Sea, exploration and development of mineral resources beyond national jurisdiction, and the consequences of sea level rise for coastal States. Since 2018, the ICLRC has been advising the delegation of the Russian Federation to the ISA on various issues arising in the con-text of work on the Draft Rules on Exploitation for Mineral Resources in the Area. The ICLRCs materials are used by the Russian delegation during negotiations and are pub-lished on the ISA website. As part of the work in this area, in 2019, the ICLRC also took part in the prepara-tion of proposals for the development of Russian legislation regulating activities in the Area.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 5,
                'locale' => 'ru',
                'name' => 'Арктика',
                'short_description' => 
                '       
                Центр анализирует актуальные вопросы в Арктике с позиции действующего регулирования и перспектив его развития, уделяя особое внимание проблематике изменения климата в этом регионе. В фокусе внимания Центра — применимое право и режим морских пространств Арктики, регулирование хозяйственной деятельности в контексте климатических изменений, инструменты эффективного управления и содействия достижению целей устойчивого развития (морское пространственное планирование, устойчивое финансирование).
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 5,
                'locale' => 'en',
                'name' => 'Arctic',
                'short_description' => 
                ' 
            The ICLRC analyzes current issues
            in the Arctic from the perspective of current regulation and prospects for its development, paying special attention to the problems of climate change in this region. The ICLRC focuses on the applicable law and regime of the Arctic maritime spaces, regulation of economic activity in the context of climate change, tools for effective management and promotion of sustainable development goals (marine spatial planning, sustainable finance)
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 6,
                'locale' => 'ru',
                'name' => 'Торговля и инвестиции',
                'short_description' => 
                '       
                Гармонизация правовых механизмов, регулирующих трансграничную торговлю, является одной из главных предпосылок создания благоприятного инвестиционного климата и среды доверия на различных рынках. В фокусе внимания Центра находятся международные инструменты унификации торговых отношений и рассмотрения коммерческих споров, над которыми ведётся работа в рамках UNCITRAL [Комиссия ООН по праву международной торговли], UNIDROIT [Международный институт по унификации частного права] и других международных организациях. Центр участвует в работе сразу трёх рабочих групп UNCITRAL в качестве наблюдателя.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 6,
                'locale' => 'en',
                'name' => 'Trade and investment',
                'short_description' => 
                ' 
            Harmonization of legal mechanisms regulating cross-border trade is one of the main prerequisites for creating a favorable investment climate and an environment of trust in various markets. The focus of the ICLRCs attention is on international instru-ments for the unification of trade relations and the consideration of commercial disputes, which are being worked on within the framework of the UNCITRAL, UNIDROIT. and other international organizations. The ICLRC participates in the work of three UNCITRAL Working Groups as an observer.
                ',
                'description' => null,
            ],
            [
                'agenda_id' => 7,
                'locale' => 'ru',
                'name' => 'Цифровизация',
                'short_description' => 
                '
                Цифровизация является одним из ключевых факторов, способных обеспечить рост мировой торговли, что влечёт необходимость исследования правовых аспектов новых инструментов цифровой экономики, включая искусственный интеллект, блокчейн, смарт-контракты и Big Data. Центр проводит исследования в сфере трансграничного признания электронных документов, в качестве наблюдателя участвует в Рабочей группе IV UNCITRAL [Комиссия ООН по праву международной торговли], которая занимается вопросами использования и трансграничного признания управления идентификационными данными и удостоверительными услугами.
          ',
                'description' => null,
            ],
            [
                'agenda_id' => 7,
                'locale' => 'en',
                'name' => 'Digitalization',
                'short_description' => 
                '
            Digitalization is one of the key factors that may ensure the growth of world trade, which entails the need to study the legal aspects of new tools of the digital economy, including artificial intelligence, blockchain, smart con-tracts, and Big Data. The ICLRC conducts research in the field of cross-border recognition of elec-tronic documents, participates as an observer in the UNCITRAL Working Group IV which works upon the use and cross-border recognition of the management of identification data and identity services.
          ',
                'description' => null,
            ],
        ]);
    }
}
