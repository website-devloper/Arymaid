<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['type' => 'Housekeeping'],
            ['type' => 'Laundry & Ironing'],
            ['type' => 'Home Essentials'],
        ];

        foreach ($categories as $cat) {
            categorie::create($cat);
        }
    }
}
