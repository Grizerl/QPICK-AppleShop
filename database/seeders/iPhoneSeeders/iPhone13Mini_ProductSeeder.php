<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone13Mini_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 13 mini 128GB (Starlight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32999, 'discount'=>32000, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-white.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 128GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32999, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-black.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 128GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32999, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-pink.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 128GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32999, 'discount'=>32000, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-blue.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 128GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 35734, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-red.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 256GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 36566, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-black.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 256GB (Starlight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 40726, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-white.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 256GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 40276, 'discount'=>40000, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-pink.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 512GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 43222, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-blue.jpg', 'subcategory_id' => 4]);
        Product::create(['name' => 'iPhone 13 mini 512GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>44740, 'discount'=>44500, 'image'=>'/assets/images/iPhone/13_mini/iphone-13-mini-green.jpg', 'subcategory_id' => 4]);

    }
}
