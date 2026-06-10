<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ExpertSeeder::class,
            ServiceSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
            PartnerSeeder::class,
            ProjectSeeder::class,
            StatSeeder::class,
        ]);
    }
}