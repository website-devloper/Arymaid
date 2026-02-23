<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categorie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = categorie::all();
        $category = $categories->random();
        
        $categoryNames = [
            'Housekeeping' => ['Dish Soap', 'Glass Cleaner', 'Mop Refill', 'Bucket', 'Broom', 'Sponge Set', 'All-Purpose Spray'],
            'Laundry & Ironing' => ['Ironing Board', 'Dryer Sheets', 'Laundry Basket', 'Stain Remover', 'Clothespins', 'Fabric Refresher'],
            'Home Essentials' => ['Diffuser', 'Bed Sheet Set', 'Pillowcase', 'Decorative Tray', 'Wall Clock', 'Trash Can'],
            'Personal Care' => ['Shampoo', 'Conditioner', 'Body Wash', 'Toothbrush', 'Hand Cream', 'Lip Balm', 'Face Mask'],
            'Kitchenware' => ['Frying Pan', 'Mixing Bowl', 'Spatula', 'Knife Set', 'Cutting Board', 'Oven Mitts', 'Toaster'],
            'Storage & Organization' => ['Clear Bin', 'Shelf Divider', 'Shoe Rack', 'Hanger Set', 'Drawer Organizer', 'Label Maker'],
            'Gardening Gear' => ['Hand Trowel', 'Watering Can', 'Pruning Shears', 'Garden Gloves', 'Plant Pot', 'Fertilizer'],
            'Office Supplies' => ['Notebook', 'Pen Set', 'Desk Organizer', 'Mouse Pad', 'Stapler', 'File Folder'],
            'Pet Care' => ['Dog Bowl', 'Cat Litter', 'Pet Toy', 'Grooming Brush', 'Pet Shampoo', 'Leash'],
            'Baby Essentials' => ['Baby Wipes', 'Diaper Cream', 'Pacifier', 'Baby Bottle', 'Bib Set', 'Teething Toy'],
            'Tech Accessories' => ['USB Cable', 'Phone Stand', 'Earbuds Case', 'Screen Cleaner', 'Cable Organizer'],
            'Outdoor Living' => ['Patio Chair', 'Lantern', 'Pic Blanket', 'Cooler Bag', 'Grill Brush', 'Citronella Candle'],
            'Fashion & Apparel' => ['Cotton T-Shirt', 'Slim Fit Jeans', 'Leather Jacket', 'Floral Summer Dress', 'Classic Hoodie', 'Wool Sweater', 'Denim Shirt', 'Tailored Blazer', 'Sport Leggings', 'Silk Scarf'],
        ];

        $name = $this->faker->randomElement($categoryNames[$category->type] ?? ['Premium Product']) . ' ' . $this->faker->randomElement(['Pro', 'Ultra', 'Deluxe', 'Eco', 'Classic', 'Select', 'Signature', 'Elite']);
        
        // Image assignment logic
        if ($category->type == 'Fashion & Apparel') {
            $randIdx = $this->faker->numberBetween(1, 10);
            $imgName = "unique_fashion_{$randIdx}.jpg";
        } else {
            // Fallback to original premium images if unique_prod isn't ready
            $premiumImages = [
                'laundry_detergent.png', 'fabric_softener.png', 'multi_surface_cleaner.png', 
                'floor_mop.png', 'scented_candle.png', 'cotton_towels.png'
            ];
            $imgName = $this->faker->randomElement($premiumImages);
        }

        return [
            'name' => $name,
            'price' => $this->faker->numberBetween(15, 895), // Fashion can be pricier
            'image' => $imgName,
            'hoverImg' => $imgName,
            'utilisation' => $this->faker->sentence(),
            'description' => $this->faker->realText(80),
            'description2' => $this->faker->realText(80),
            'stock' => $this->faker->numberBetween(5, 200),
            'categorie_id' => $category->id,
            'status' => 'In stock',
            'oldPrice' => $this->faker->numberBetween(50, 600),
        ];
    }
}
