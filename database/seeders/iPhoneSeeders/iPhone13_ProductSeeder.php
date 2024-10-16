<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone13_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 13 128GB (Starlight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 25499, 'image'=>'/assets/images/iPhone/13/iphone-13white.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 128GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 25499, 'image'=>'/assets/images/iPhone/13/iphone-13black.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 128GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 25499, 'image'=>'/assets/images/iPhone/13/iphone-13-pink.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 128GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 25499, 'discount'=>25100, 'image'=>'/assets/images/iPhone/13/iphone-13-blue.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 128GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 25499, 'image'=>'/assets/images/iPhone/13/iphone-13-red.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 256GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 29494, 'image'=>'/assets/images/iPhone/13/iphone-13-black.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 256GB (Starlight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 29494, 'image'=>'/assets/images/iPhone/13/iphone-13-white.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 256GB (Pink)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 29550, 'discount'=>29100, 'image'=>'/assets/images/iPhone/13/iphone-13-pink.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 512GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 31200, 'image'=>'/assets/images/iPhone/13/iphone-13-blue.jpg', 'subcategory_id' => 5]);
        Product::create(['name' => 'iPhone 13 512GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>32550, 'discount'=>32000, 'image'=>'/assets/images/iPhone/13/iphone-13-green.jpg', 'subcategory_id' => 5]);

    }
}
