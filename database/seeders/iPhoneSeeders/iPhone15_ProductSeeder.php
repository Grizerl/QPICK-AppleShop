<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone15_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 15 128GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32799, 'image'=>'/assets/images/iPhone/15/iphone-15-black.jpg', 'subcategory_id' => 9]);
        Product::create(['name' => 'iPhone 15 128GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32599, 'image'=>'/assets/images/iPhone/15/iphone-15-pink.jpg', 'subcategory_id' => 9]);
        Product::create(['name' => 'iPhone 15 256GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32299, 'image'=>'/assets/images/iPhone/15/iphone-15-black.jpg', 'subcategory_id' => 9]);
        Product::create(['name' => 'iPhone 15 128GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32499, 'image'=>'/assets/images/iPhone/15/iphone-15-green.jpg', 'subcategory_id' => 9]);
        Product::create(['name' => 'iPhone 15 128GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32699, 'image'=>'/assets/images/iPhone/15/iphone-15-blue.jpg', 'subcategory_id' => 9]);
        Product::create(['name' => 'iPhone 15 128GB (Yellow)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 37999, 'image'=>'/assets/images/iPhone/15/iphone-15-yellow.jpg', 'subcategory_id' => 9]);
        Product::create(['name' => 'iPhone 15 256GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32999, 'image'=>'/assets/images/iPhone/15/iphone-15-pink.jpg', 'subcategory_id' => 9]);
    }   
}
