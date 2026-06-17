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
        $housekeepingId = \App\Models\categorie::where('type', 'Housekeeping')->first()->id ?? 1;
        $laundryId = \App\Models\categorie::where('type', 'Laundry & Ironing')->first()->id ?? 2;
        $homeId = \App\Models\categorie::where('type', 'Home Essentials')->first()->id ?? 3;
        $personalCareId = \App\Models\categorie::where('type', 'Personal Care')->first()->id ?? 4;
        $kitchenwareId = \App\Models\categorie::where('type', 'Kitchenware')->first()->id ?? 5;
        $storageId = \App\Models\categorie::where('type', 'Storage & Organization')->first()->id ?? 6;

        $products = [
            // Original 6
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
            
            // New 14 Realistic Products
            [
                'name' => 'Aromatherapy Diffuser & Humidifier',
                'price' => 210,
                'image' => 'https://images.unsplash.com/photo-1602928321679-560bb453f190?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1602928321679-560bb453f190?w=600&h=600&fit=crop',
                'utilisation' => 'Fill with water and 5-10 drops of essential oil.',
                'description' => 'Enhance your home environment with soothing scents.',
                'description2' => 'Auto-shutoff feature when water runs out.',
                'stock' => 45,
                'status' => 'In stock',
                'oldPrice' => 250,
                'categorie_id' => $homeId
            ],
            [
                'name' => 'Organic Bamboo Bed Sheets (Queen)',
                'price' => 450,
                'image' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?w=600&h=600&fit=crop',
                'utilisation' => 'Machine wash cold, tumble dry low.',
                'description' => 'Silky soft, breathable, and thermoregulating.',
                'description2' => 'Hypoallergenic and eco-friendly bamboo fiber.',
                'stock' => 30,
                'status' => 'In stock',
                'oldPrice' => 499,
                'categorie_id' => $homeId
            ],
            [
                'name' => 'Eco-Friendly Kitchen Sponge Set',
                'price' => 25,
                'image' => 'https://images.unsplash.com/photo-1584820927498-cafe2c1c3600?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1584820927498-cafe2c1c3600?w=600&h=600&fit=crop',
                'utilisation' => 'Wet, add soap, and scrub dishes or surfaces.',
                'description' => 'Made from 100% biodegradable plant fibers.',
                'description2' => 'Non-scratch material, safe for all cookware.',
                'stock' => 300,
                'status' => 'In stock',
                'oldPrice' => 35,
                'categorie_id' => $kitchenwareId
            ],
            [
                'name' => 'Heavy-Duty Ironing Board',
                'price' => 280,
                'image' => 'https://images.unsplash.com/photo-1544457070-4cd773b4d71e?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1544457070-4cd773b4d71e?w=600&h=600&fit=crop',
                'utilisation' => 'Unfold, adjust height, and iron away.',
                'description' => 'Extra wide surface with heat-reflective cover.',
                'description2' => 'Sturdy steel frame prevents wobbling.',
                'stock' => 15,
                'status' => 'In stock',
                'oldPrice' => 320,
                'categorie_id' => $laundryId
            ],
            [
                'name' => 'Steam Iron Premium Glide',
                'price' => 350,
                'image' => 'https://images.unsplash.com/photo-1628144298150-1dfeccece206?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1628144298150-1dfeccece206?w=600&h=600&fit=crop',
                'utilisation' => 'Fill with distilled water for steam ironing.',
                'description' => 'Ceramic soleplate for effortless gliding.',
                'description2' => 'Powerful steam burst removes stubborn creases.',
                'stock' => 40,
                'status' => 'In stock',
                'oldPrice' => 400,
                'categorie_id' => $laundryId
            ],
            [
                'name' => 'Glass Food Storage Containers (5-Pack)',
                'price' => 180,
                'image' => 'https://images.unsplash.com/photo-1590004953392-5aba2e72269a?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1590004953392-5aba2e72269a?w=600&h=600&fit=crop',
                'utilisation' => 'Microwave, oven, and dishwasher safe (without lids).',
                'description' => 'Airtight, leak-proof smart locking lids.',
                'description2' => 'Borosilicate glass prevents odor absorption.',
                'stock' => 85,
                'status' => 'In stock',
                'oldPrice' => 220,
                'categorie_id' => $storageId
            ],
            [
                'name' => 'Woven Storage Baskets (Set of 3)',
                'price' => 140,
                'image' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=600&h=600&fit=crop',
                'utilisation' => 'Use to organize towels, toys, or magazines.',
                'description' => 'Handwoven natural water hyacinth over a wire frame.',
                'description2' => 'Adds a rustic touch to any room organization.',
                'stock' => 60,
                'status' => 'In stock',
                'oldPrice' => 170,
                'categorie_id' => $storageId
            ],
            [
                'name' => 'Stainless Steel Trash Can (50L)',
                'price' => 490,
                'image' => 'https://images.unsplash.com/photo-1550989460-0adf9ea622e2?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1550989460-0adf9ea622e2?w=600&h=600&fit=crop',
                'utilisation' => 'Step on pedal to open lid hands-free.',
                'description' => 'Smudge-proof finish and silent closing lid.',
                'description2' => 'Includes odor filter compartment.',
                'stock' => 25,
                'status' => 'In stock',
                'oldPrice' => 550,
                'categorie_id' => $housekeepingId
            ],
            [
                'name' => 'Microfiber Duster with Extension Pole',
                'price' => 85,
                'image' => 'https://images.unsplash.com/photo-1585421514738-01798e348b17?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1585421514738-01798e348b17?w=600&h=600&fit=crop',
                'utilisation' => 'Extend pole to reach high ceilings and fans.',
                'description' => 'Traps dust magnetically without chemicals.',
                'description2' => 'Washable and reusable duster head.',
                'stock' => 110,
                'status' => 'In stock',
                'oldPrice' => 100,
                'categorie_id' => $housekeepingId
            ],
            [
                'name' => 'Robotic Vacuum Cleaner Pro',
                'price' => 1999,
                'image' => 'https://images.unsplash.com/photo-1589923188900-85dae523342b?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1589923188900-85dae523342b?w=600&h=600&fit=crop',
                'utilisation' => 'Set schedule via smartphone app.',
                'description' => 'Smart navigation and powerful suction.',
                'description2' => 'Automatically returns to base to charge.',
                'stock' => 10,
                'status' => 'In stock',
                'oldPrice' => 2200,
                'categorie_id' => $housekeepingId
            ],
            [
                'name' => 'Non-Stick Ceramic Frying Pan',
                'price' => 240,
                'image' => 'https://images.unsplash.com/photo-1585032226651-759b368d7246?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1585032226651-759b368d7246?w=600&h=600&fit=crop',
                'utilisation' => 'Use low to medium heat for best results.',
                'description' => 'Toxin-free healthy ceramic non-stick coating.',
                'description2' => 'Scratch resistant and easy to clean.',
                'stock' => 65,
                'status' => 'In stock',
                'oldPrice' => 280,
                'categorie_id' => $kitchenwareId
            ],
            [
                'name' => 'Organic Hand Soap (Aloe Vera)',
                'price' => 55,
                'image' => 'https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1600857062241-98e5dba7f214?w=600&h=600&fit=crop',
                'utilisation' => 'Apply to wet hands, lather, and rinse.',
                'description' => 'Moisturizing formula with natural Aloe extract.',
                'description2' => 'Free from parabens and harsh chemicals.',
                'stock' => 180,
                'status' => 'In stock',
                'oldPrice' => 65,
                'categorie_id' => $personalCareId
            ],
            [
                'name' => 'Plush Bath Mat Set',
                'price' => 130,
                'image' => 'https://images.unsplash.com/photo-1620626011761-996317b8d101?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1620626011761-996317b8d101?w=600&h=600&fit=crop',
                'utilisation' => 'Place outside shower/tub to absorb water.',
                'description' => 'Ultra-soft memory foam with anti-slip backing.',
                'description2' => 'Fast-drying and machine washable.',
                'stock' => 90,
                'status' => 'In stock',
                'oldPrice' => 160,
                'categorie_id' => $homeId
            ],
            [
                'name' => 'Professional Chef Knife (8 Inch)',
                'price' => 380,
                'image' => 'https://images.unsplash.com/photo-1593618998160-e34014e67546?w=600&h=600&fit=crop',
                'hoverImg' => 'https://images.unsplash.com/photo-1593618998160-e34014e67546?w=600&h=600&fit=crop',
                'utilisation' => 'Hand wash only, dry immediately.',
                'description' => 'High-carbon stainless steel blade.',
                'description2' => 'Ergonomic handle for precision cutting.',
                'stock' => 55,
                'status' => 'In stock',
                'oldPrice' => 450,
                'categorie_id' => $kitchenwareId
            ],
        ];

        foreach ($products as $product) {
            produit::create($product);
        }
    }
}
