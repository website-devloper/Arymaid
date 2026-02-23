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
            ['type' => 'Personal Care'],
            ['type' => 'Kitchenware'],
            ['type' => 'Storage & Organization'],
            ['type' => 'Gardening Gear'],
            ['type' => 'Office Supplies'],
            ['type' => 'Pet Care'],
            ['type' => 'Baby Essentials'],
            ['type' => 'Tech Accessories'],
            ['type' => 'Outdoor Living'],
            ['type' => 'Fashion & Apparel'],
        ];

        foreach ($categories as $cat) {
            categorie::create($cat);
        }
    }
}
