<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone16Pro_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 16 Pro 256GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>58099, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-black.jpg', 'subcategory_id' => 14]);
        Product::create(['name' => 'iPhone 16 Pro 128GB (White Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>58099, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-white.jpg', 'subcategory_id' => 14]);
        Product::create(['name' => 'iPhone 16 Pro 256GB (Desert Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>59099, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-yellow.jpg', 'subcategory_id' => 14]);
        Product::create(['name' => 'iPhone 16 Pro 1TB (Natural Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>87099, 'image'=>'/assets/images/iPhone/16_Pro/iPhone-16-Pro-natural.jpg', 'subcategory_id' => 14]);
      
    }   
}
