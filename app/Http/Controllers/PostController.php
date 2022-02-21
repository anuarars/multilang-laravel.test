<?php

namespace App\Http\Controllers;

use App\Imports\NewsImport;
use Illuminate\Support\Facades\DB;
use App\Models\AgendaTranslation;
use App\Models\Donator;
use App\Models\Expert;
use DateTime;
use App\Models\News;
use App\Models\Tag;
use App\Models\TagTranslation;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_donators = (new NewsImport)->toArray(public_path('donators.xlsx'));
        $content = $data_donators[0];
        // dd($content);
        
        for ($i=3; $i < 27 ; $i++) { 
            $donator = new Donator();
            $donator->type = 'person';
            $donator->save();

            DB::table('donator_translations')->insert([
                [
                    'donator_id' => $donator->id,
                    'locale' => 'ru',
                    'name' => $content[$i][1],
                    'description' => $content[$i][2],
                ],
                [
                    'donator_id' => $donator->id,
                    'locale' => 'en',
                    'name' => $content[$i][3],
                    'description' => $content[$i][4],
                ]
            ]);
        }

        for ($i=28; $i < 31 ; $i++) { 
            $donator = new Donator();
            $donator->type = 'organization';
            $donator->save();

            DB::table('donator_translations')->insert([
                [
                    'donator_id' => $donator->id,
                    'locale' => 'ru',
                    'name' => $content[$i][1],
                    'description' => null
                ],
                [
                    'donator_id' => $donator->id,
                    'locale' => 'en',
                    'name' => $content[$i][3],
                    'description' => null
                ]
            ]);
        }


        // $data_partners = (new NewsImport)->toArray(public_path('partners.xlsx'));
        // $content = $data_partners[0];
        // // dd($content);

        // for ($i=2; $i < 13; $i++) { 
        //     $partner = new Partner();
        //     $partner->type = 'library';
        //     $partner->link = $content[$i][2];
        //     $partner->save();

        //     DB::table('partner_translations')->insert([
        //         [
        //             'partner_id' => $partner->id,
        //             'locale' => 'ru',
        //             'name' => $content[$i][1],
        //         ],
        //         [
        //             'partner_id' => $partner->id,
        //             'locale' => 'en',
        //             'name' => $content[$i][1],
        //         ]
        //     ]);
        // }




        $news = new News();
        $news->save();
            DB::table('news_translations')->insert([
                [
                    'news_id' => $news->id,
                    'locale' => 'en',
                    'title' => 'News of the library',
                    'content' => 'The ICLRC Library is replenished with the books from Sergey Usoskin’s collection 
                    The Library of the Center now displays a book collection of the Russian lawyer and expert in international arbitration Sergey Usoskin. The collection contains books by experts, historians, and journalists on private international law, as well as materials on the history of several international law firms, the evolution of the legal profession in the United States, and the legal system of England.',
                ],
                [
                    'news_id' => $news->id,
                    'locale' => 'ru',
                    'title' => 'Новости библиотеки',
                    'content' => 'Библиотека Центра пополнилась книгами из коллекции Сергея Усоскина 
                    В библиотеке Центра выставлена авторская коллекция книг адвоката и эксперта по международному арбитражу – Сергея Усоскина. В неё вошли книги иностранных экспертов, историков и журналистов о международном частном праве, а также материалы об истории международных юридических фирм, об эволюции профессии юриста в США и о правовой системе Англии.',
                ]
            ]);
            DB::table('news_tag')->insert([
                'news_id' => $news->id,
                'tag_id' => 1
            ]);

        $data = (new NewsImport)->toArray(public_path('council.xlsx'));
        $content = $data[0];
        // dd($content);

        for ($i=2; $i < 14; $i++) { 
            $expert = new Expert();
            $expert->is_show = 0;
            $expert->type = 0;
            $expert->interview = $content[$i][4];
            $expert->save();

            DB::table('expert_translations')->insert([
                'expert_id' => $expert->id,
                'locale' => 'ru',
                'name' => $content[$i][1].' '.$content[$i][2],
                'jobTitle' => $content[$i][3],
            ]);
            DB::table('expert_translations')->insert([
                'expert_id' => $expert->id,
                'locale' => 'en',
                'name' => $content[$i][6].' '.$content[$i][7],
                'jobTitle' => $content[$i][8],
            ]);
            DB::table('expert_project')->insert([
                'expert_id' => $expert->id,
                'project_id' => 1,
            ]);
        }


        $data_experts = (new NewsImport)->toArray(public_path('experts.xlsx'));
        $content = $data_experts[0];
        // dd($content);

        for ($i=3; $i < 25; $i++) { 
            $expert = new Expert();
            $expert->is_show = 0;
            $expert->save();

            $agenda = AgendaTranslation::where('name', $content[$i][15])->first();
            if($agenda != null){
                $expert->agendas()->attach($agenda->agenda_id);
            }

            DB::table('expert_translations')->insert([
                'expert_id' => $expert->id,
                'locale' => 'ru',
                'name' => $content[$i][1].' '.$content[$i][2],
                'country' => $content[$i][3],
                'jobTitle' => $content[$i][5],
            ]);
            DB::table('expert_translations')->insert([
                'expert_id' => $expert->id,
                'locale' => 'en',
                'name' => $content[$i][10].' '.$content[$i][11],
                'country' => $content[$i][12],
                'jobTitle' => $content[$i][14],
            ]);

        }

        $data_news = (new NewsImport)->toArray(public_path('news2.xlsx'));
        $content_news = $data_news[0];
        // dd($content_news);
        for ($i=2; $i < 94; $i++) { 
            $agenda = AgendaTranslation::where('name', $content_news[$i][13])->first();

            $news = new News();
            $news->created_at = new DateTime($content_news[$i][12]);
            $news->link = $content_news[$i][10];
            $news->agenda_id = $agenda->agenda_id ?? null;
            $news->save();

            DB::table('news_translations')->insert([
                'news_id' => $news->id,
                'locale' => 'ru',
                'title' => $content_news[$i][1],
                'content' => $content_news[$i][5],
            ]);
            DB::table('news_translations')->insert([
                'news_id' => $news->id,
                'locale' => 'en',
                'title' => $content_news[$i][11],
                'content' => $content_news[$i][15],
            ]);


            $tags_en = explode(',', $content_news[$i][14]);
            $tags_ru = explode(',', $content_news[$i][4]);
            foreach($tags_en as $key => $tag){
                if(!empty($tag)){
                    $tag_name = TagTranslation::where('name', trim($tag))->first();
                    if(is_null($tag_name)){
                        $item = new Tag();
                        $item->save();
                        $news->tags()->attach($item);
                        DB::table('tag_translations')->insert([
                            [
                                'tag_id' => $item->id,
                                'locale' => 'en',
                                'name' => ucfirst(trim($tag))
                            ],
                            [
                                'tag_id' => $item->id,
                                'locale' => 'ru',
                                'name' => ucfirst(trim($tags_ru[$key]))
                            ],
                        ]);
                    }else{
                        $news->tags()->attach($tag_name);
                    }
                }
            }
        }
    }
}
