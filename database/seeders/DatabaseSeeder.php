<?php

namespace Database\Seeders;

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
        // Countries
        $this->call(CountriesSeeder::class);
        $this->call(ProvincesSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(SectorsSeeder::class);

    }
}
