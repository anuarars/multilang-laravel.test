<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\TagTranslation;
use Illuminate\Support\Str;
use App\Models\Tag;
use App\Models\Publication;
use App\Models\PublicationType;
use App\Models\AgendaTranslation;
use App\Imports\NewsImport;
use App\Models\PublicationTypeTranslation;
use DateTime;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_publication = (new NewsImport)->toArray(public_path('publ.xlsx'));
        $data = $data_publication[0];

        for ($i=5; $i < 31; $i++) { 
            $agenda = AgendaTranslation::where('name', $data[$i][17])->first();
            $pub = PublicationTypeTranslation::where('name', $data[$i][10])->first();
            if($pub == null){
                $new_type = new PublicationType();
                $new_type->save();
                DB::table('publication_type_translations')->insert([
                    [
                        'publication_type_id' => $new_type->id,
                        'locale' => 'ru',
                        'name' => $data[$i][10]
                    ],
                    [
                        'publication_type_id' => $new_type->id,
                        'locale' => 'en',
                        'name' => $data[$i][20]
                    ],
                ]);
            }

            $publication = new Publication();
            $publication->agenda_id = $agenda->agenda_id ?? null;
            $publication->created_at = new DateTime($data[$i][12]);
            $publication->publication_type_id = $pub->publication_type_id ?? $new_type->id;
            $publication->save();

            DB::table('publication_translations')->insert([
                'publication_id' => $publication->id,
                'locale' => 'ru',
                'title' => $data[$i][1],
                'content' => $data[$i][3],
            ]);
            DB::table('publication_translations')->insert([
                'publication_id' => $publication->id,
                'locale' => 'en',
                'title' => $data[$i][11],
                'content' => $data[$i][13],
            ]);

            $tags_en = explode(',', $data[$i][18]);
            $tags_ru = explode(',', $data[$i][8]);
            foreach($tags_en as $key => $tag){
                if(!empty($tag)){
                    $tag_name = TagTranslation::where('name', trim($tag))->first();
                    if(is_null($tag_name)){
                        $item = new Tag();
                        $item->save();
                        $publication->tags()->attach($item);
                        DB::table('tag_translations')->insert([
                            [
                                'tag_id' => $item->id,
                                'locale' => 'en',
                                'name' => Str::ucfirst(trim($tag))
                            ],
                            [
                                'tag_id' => $item->id,
                                'locale' => 'ru',
                                'name' => Str::ucfirst(trim($tags_ru[$key]))
                            ],
                        ]);
                    }else{
                        $publication->tags()->attach($tag_name->tag_id);
                    }
                }
            }

            // $experts_en = explode(',', $data[$i][14]);
            // foreach($experts_en as $key => $expert){
            //     if($expert != ""){
            //         $expert_name = ExpertTranslation::where('name', trim(preg_replace("/\([^)]+\)/","",$expert)))->first();
            //         if(is_null($expert_name)){
            //             $item = new Expert();
            //             $item->is_show = 0;
            //             $item->save();
            //             $publication->experts()->attach($item);
            //             DB::table('expert_translations')->insert([
            //                 [
            //                     'expert_id' => $item->id,
            //                     'locale' => 'ru',
            //                     'name' => trim(preg_replace("/\([^)]+\)/","",$expert))
            //                 ],
            //                 [
            //                     'expert_id' => $item->id,
            //                     'locale' => 'en',
            //                     'name' => trim(preg_replace("/\([^)]+\)/","",$expert))
            //                 ]
            //             ]);
            //         }else{
            //             $publication->experts()->attach($expert_name);
            //         }
            //     }
            // }
        }
    }
}
