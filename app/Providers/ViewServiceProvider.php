<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Tag;
use App\Models\Expert;
use App\Models\Agenda;
use App\Models\Page;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.app', function ($view) {
            $locale = \App::getLocale();
            $tags = Tag::orderBy('created_at', 'desc')->limit(7)->get();
            $agendas = Agenda::all();
            $footerExperts = Expert::orderBy('position', 'asc')->limit(7)->get();
            $network = DB::table('social_networks')->get();
            $footerEvents = Event::orderBy('datetimes', 'desc')->limit(7)->get();

            $letters_agendas = $this->firstLetterArray(Agenda::all());
            $letters_tags = $this->firstLetterArray(Tag::all());
            $letters_experts = $this->firstLetterArray(Expert::all());
            // dd($letters_agendas );

            $view->with('app_locale', $locale);
            $view->with('popular_tags', $tags);
            $view->with('footerExperts', $footerExperts);
            $view->with('footerEvents', $footerEvents);
            $view->with('network', $network);
            $view->with('agendas', $agendas);
            $view->with('letters_agendas', $letters_agendas);
            $view->with('letters_tags', $letters_tags);
            $view->with('letters_experts', $letters_experts);

            // $view->with('menu_main', \Cache::remember('menu_main.'.$locale, 60*24, function () {
            //     $menus = ['items' => [], 'parents' => []];

            //     $items = Menu::orderBy('parent_id')->orderBy('position')->get();
            //     foreach ($items as $item) {
            //         if ($item->active) {
            //             $menus['items'][$item->id] = $item;
            //             $menus['parents'][$item->parent_id][] = $item->id;
            //         }
            //     }

            //     $menus = createTreeList('', $menus);

            //     return $menus;
            // }));
        });

        View::composer('layouts.view', function ($view) {
            $locale = \App::getLocale();
            $tags = Tag::orderBy('created_at', 'desc')->limit(7)->get();
            $agendas = Agenda::all();
            $footerExperts = Expert::orderBy('position', 'asc')->limit(7)->get();
            $network = DB::table('social_networks')->get();
            $footerEvents = Event::orderBy('date_start', 'desc')->limit(7)->get();

            $letters_agendas = $this->firstLetterArray(Agenda::all());
            $letters_tags = $this->firstLetterArray(Tag::all());
            $letters_experts = $this->firstLetterArray(Expert::all());

            $view->with('app_locale', $locale);
            $view->with('popular_tags', $tags);
            $view->with('footerExperts', $footerExperts);
            $view->with('footerEvents', $footerEvents);
            $view->with('network', $network);
            $view->with('agendas', $agendas);
            $view->with('letters_agendas', $letters_agendas);
            $view->with('letters_tags', $letters_tags);
            $view->with('letters_experts', $letters_experts);

            // $view->with('menu_main', \Cache::remember('menu_main.'.$locale, 60*24, function () {
            //     $menus = ['items' => [], 'parents' => []];

            //     $items = Menu::orderBy('parent_id')->orderBy('position')->get();
            //     foreach ($items as $item) {
            //         if ($item->active) {
            //             $menus['items'][$item->id] = $item;
            //             $menus['parents'][$item->parent_id][] = $item->id;
            //         }
            //     }

            //     $menus = createTreeList('', $menus);

            //     return $menus;
            // }));
        });

        View::composer('layouts.main', function ($view) {
            $locale = \App::getLocale();
            $tags = Tag::orderBy('created_at', 'desc')->limit(7)->get();
            $agendas = Agenda::all();
            $footerExperts = Expert::orderBy('position', 'asc')->limit(7)->get();
            $network = DB::table('social_networks')->get();

            $view->with('app_locale', $locale);
            $view->with('popular_tags', $tags);
            $view->with('footerExperts', $footerExperts);
            $view->with('network', $network);
            $view->with('agendas', $agendas);

        });

        View::composer('layouts.admin', function ($view) {
            $staticPages = Page::all();

            $view->with('staticPages', $staticPages);

        });
    }

    private function firstLetterArray($model){
        $array_letters = [];
        $array = $model->sortBy('name')->pluck('name');
        foreach($array as $value){
            $array_letters[] = mb_substr(mb_strtoupper($value), 0, 1, 'UTF-8');
        }
        $array_letters = array_unique($array_letters, SORT_REGULAR);
        $array_letters = array_values($array_letters);
        return $array_letters;
    }
}