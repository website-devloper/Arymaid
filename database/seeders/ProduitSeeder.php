<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\produit;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $housekeepingId = \App\Models\categorie::where('type', 'Housekeeping')->first()->id;
        $laundryId = \App\Models\categorie::where('type', 'Laundry & Ironing')->first()->id;
        $homeId = \App\Models\categorie::where('type', 'Home Essentials')->first()->id;

        $products = [
            [
                'name' => 'Laundry Detergent Premium',
                'price' => 75,
                'image' => 'laundry_detergent.png',
                'hoverImg' => 'laundry_detergent.png',
                'utilisation' => 'Add to washing machine for deep clean.',
                'description' => 'Gentle on fabrics, tough on stains.',
                'description2' => 'Environmentally friendly formula.',
                'stock' => 100,
                'status' => 'In stock',
                'oldPrice' => 85,
                'categorie_id' => $laundryId
            ],
            [
                'name' => 'Fabric Softener Lavender',
                'price' => 60,
                'image' => 'fabric_softener.png',
                'hoverImg' => 'fabric_softener.png',
                'utilisation' => 'Apply during rinse cycle.',
                'description' => 'Long-lasting lavender scent.',
                'description2' => 'Makes clothes feel extra soft.',
                'stock' => 150,
                'status' => 'In stock',
                'oldPrice' => 70,
                'categorie_id' => $laundryId
            ],
            [
                'name' => 'Multi-Surface Cleaner Citrus',
                'price' => 45,
                'image' => 'multi_surface_cleaner.png',
                'hoverImg' => 'multi_surface_cleaner.png',
                'utilisation' => 'Spray and wipe with a clean cloth.',
                'description' => 'Kills 99.9% of bacteria.',
                'description2' => 'Leaves a fresh citrus scent.',
                'stock' => 200,
                'status' => 'In stock',
                'oldPrice' => 50,
                'categorie_id' => $housekeepingId
            ],
            [
                'name' => 'Premium Floor Mop',
                'price' => 120,
                'image' => 'floor_mop.png',
                'hoverImg' => 'floor_mop.png',
                'utilisation' => 'Use with warm water and floor cleaner.',
                'description' => 'Ergonomic handle for easy use.',
                'description2' => 'Ultra-absorbent microfiber head.',
                'stock' => 50,
                'status' => 'In stock',
                'oldPrice' => 140,
                'categorie_id' => $housekeepingId
            ],
            [
                'name' => 'Luxury Scented Candle',
                'price' => 90,
                'image' => 'scented_candle.png',
                'hoverImg' => 'scented_candle.png',
                'utilisation' => 'Trim wick to 1/4 inch before lighting.',
                'description' => 'Soy wax blend with essential oils.',
                'description2' => 'Up to 50 hours of burn time.',
                'stock' => 80,
                'status' => 'In stock',
                'oldPrice' => 110,
                'categorie_id' => $homeId
            ],
            [
                'name' => 'Cotton Towel Set (White)',
                'price' => 150,
                'image' => 'cotton_towels.png',
                'hoverImg' => 'cotton_towels.png',
                'utilisation' => 'Machine washable.',
                'description' => '100% Cotton, highly absorbent.',
                'description2' => 'Set includes 2 luxury bath towels.',
                'stock' => 120,
                'status' => 'In stock',
                'oldPrice' => 180,
                'categorie_id' => $homeId
            ],
        ];

        foreach ($products as $product) {
            produit::create($product);
        }
    }
}
