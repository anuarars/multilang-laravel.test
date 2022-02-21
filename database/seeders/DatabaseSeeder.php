<?php

namespace Database\Seeders;

use App\Models\BookRecomendation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ExpertSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(TagSeeder::class);
        $this->call(AgendaSeeder::class);
        $this->call(MigrationSeeder::class);
        $this->call(ExcelSeeder::class);
        $this->call(PublicationTypeSeeder::class);
        $this->call(PublicationSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(LibrarySeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(CurrentEventSeeder::class);
        $this->call(MainPageSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(WinnerSeeder::class);
        $this->call(WorkSeeder::class);
    }
}