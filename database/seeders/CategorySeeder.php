<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Coopération internationale', 'slug' => 'cooperation-internationale', 'ordre' => 1],
            ['name' => 'Investissements',             'slug' => 'investissements',            'ordre' => 2],
            ['name' => 'Infrastructures',             'slug' => 'infrastructures',            'ordre' => 3],
            ['name' => 'Énergie',                     'slug' => 'energie',                    'ordre' => 4],
            ['name' => 'Agriculture',                 'slug' => 'agriculture',                'ordre' => 5],
            ['name' => 'Innovation',                  'slug' => 'innovation',                 'ordre' => 6],
            ['name' => 'Santé',                       'slug' => 'sante',                      'ordre' => 7],
        ];

        foreach ($categories as $data) {
            Category::create($data);
        }
    }
}