<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone15Pro_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 15 Pro 256GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49699, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-black.jpg', 'subcategory_id' => 10]);
        Product::create(['name' => 'iPhone 15 Pro 256GB (Blue Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49699, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-blue.jpg', 'subcategory_id' => 10]);
        Product::create(['name' => 'iPhone 15 Pro 256GB (Natural Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49699, 'discount'=>48950, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-yellow.jpg', 'subcategory_id' => 10]);
        Product::create(['name' => 'iPhone 15 Pro 128GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 44499, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-black.jpg', 'subcategory_id' => 10]);
        Product::create(['name' => 'iPhone 15 Pro 256GB (White Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 44499, 'discount'=>41690, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-white.jpg', 'subcategory_id' => 10]);
        Product::create(['name' => 'iPhone 15 Pro 512GB (Black Titanium)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 58699, 'image'=>'/assets/images/iPhone/15_Pro/iPhone-15-Pro-black.jpg', 'subcategory_id' => 10]);

    }
}
