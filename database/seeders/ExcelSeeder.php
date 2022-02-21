<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\PostController;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class ExcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new PostController();
        $seed->index();
    }
}