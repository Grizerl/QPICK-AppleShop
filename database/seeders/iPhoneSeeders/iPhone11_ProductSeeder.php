<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone11_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 11 128GB (White)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>18699, 'image'=>'/assets/images/iPhone/11/iphone11-white.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 128GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>18799, 'image'=>'/assets/images/iPhone/11/iphone11-black.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 64GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>16999, 'discount'=>16000, 'image'=>'/assets/images/iPhone/11/iphone11-black.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 64GB (White)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>16099, 'image'=>'/assets/images/iPhone/11/iphone11-white.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 128GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21199, 'discount'=>21100, 'image'=>'/assets/images/iPhone/11/iphone11-red.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 64GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21999, 'image'=>'/assets/images/iPhone/11/iphone11-red.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 128GB (Yellow)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>22879, 'image'=>'/assets/images/iPhone/11/iphone11-yellow.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 64GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21999, 'discount'=>20000, 'image'=>'/assets/images/iPhone/11/iphone11-purple.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 64GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21999, 'image'=>'/assets/images/iPhone/11/iphone11-green.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 64GB (Yellow)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21999, 'discount'=>20500, 'image'=>'/assets/images/iPhone/11/iphone11-yellow.jpg', 'subcategory_id' => 2]);
        Product::create(['name' => 'iPhone 11 128GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>22879, 'image'=>'/assets/images/iPhone/11/iphone11-green.jpg', 'subcategory_id' => 2]);


    }
}
