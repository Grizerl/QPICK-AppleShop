<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone16_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 16 256GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>51999, 'image'=>'/assets/images/iPhone/16/iPhone-16-black.jpg', 'subcategory_id' => 13]);
        Product::create(['name' => 'iPhone 16 256GB (White)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>42599, 'image'=>'/assets/images/iPhone/16/iPhone-16-white.jpg', 'subcategory_id' => 13]);
        Product::create(['name' => 'iPhone 16 256GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>40599, 'image'=>'/assets/images/iPhone/16/iPhone-16-pink.jpg', 'subcategory_id' => 13]);
        Product::create(['name' => 'iPhone 16 128GB (Ultramarine)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>52000, 'image'=>'/assets/images/iPhone/16/iPhone-16-blue.jpg', 'subcategory_id' => 13]);
        Product::create(['name' => 'iPhone 16 128GB (Teal)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>51999, 'image'=>'/assets/images/iPhone/16/iPhone-16-green.jpg', 'subcategory_id' => 13]);
        Product::create(['name' => 'iPhone 16 128GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>45690, 'image'=>'/assets/images/iPhone/16/iPhone-16-black.jpg', 'subcategory_id' => 13]);
        Product::create(['name' => 'iPhone 16 256GB (White)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>17560, 'image'=>'/assets/images/iPhone/16/iPhone-16-white.jpg', 'subcategory_id' => 13]);
    }   
}
