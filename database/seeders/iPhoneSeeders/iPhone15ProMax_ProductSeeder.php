<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone15ProMax_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 15 Pro Max 512GB (Blue Titanium) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 54399, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-blue.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 256GB (White Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 54399, 'discount'=>52000, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-white.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 512GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 53999, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-black.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 512GB (Blue Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 61199, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-blue.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 1TB (White Titanium) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 70999, 'discount'=>70000, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-white.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 512GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 74999, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-black.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 256GB (Natural Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 51999, 'discount'=>50400, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-yellow.jpg', 'subcategory_id' => 11]);
        Product::create(['name' => 'iPhone 15 Pro Max 1TB (Black Titanium) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>60199, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-black.jpg', 'subcategory_id' => 11]);

    }
}
