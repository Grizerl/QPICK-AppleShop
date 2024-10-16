<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone16ProMax_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 16 Pro Max 256GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>73999, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-black.jpg', 'subcategory_id' => 15]);
        Product::create(['name' => 'iPhone 16 Pro Max 128GB (White Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>72999, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-white.jpg', 'subcategory_id' => 15]);
        Product::create(['name' => 'iPhone 16 Pro Max 256GB (Desert Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>73999, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-yellow.jpg', 'subcategory_id' => 15]);
        Product::create(['name' => 'iPhone 16 Pro Max 1TB (Natural Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>81099, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-natural.jpg', 'subcategory_id' => 15]);
      
    }   
}
