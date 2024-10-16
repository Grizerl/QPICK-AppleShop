<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone12_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 12 64GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 18000, 'discount'=>18500, 'image'=>'/assets/images/iPhone/12/iphone-12-black.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 128GB (White)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 19500,  'discount'=>20500,'image'=>'/assets/images/iPhone/12/iphone-12-white.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 128GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 24086, 'discount'=>24000, 'image'=>'/assets/images/iPhone/12/iphone-12-purple.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 64GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 21382,'image'=>'/assets/images/iPhone/12/iphone-12-purple.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 128GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 23088, 'discount'=>22100,'image'=>'/assets/images/iPhone/12/iphone-12-black.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 64GB (White)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 22006,'image'=>'/assets/images/iPhone/12/iphone-12-white.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 128GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 23254,'image'=>'/assets/images/iPhone/12/iphone-12-red.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 128GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 23088, 'discount'=>22850,'image'=>'/assets/images/iPhone/12/iphone-12-blue.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 128GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 24086,'image'=>'/assets/images/iPhone/12/iphone-12-green.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 64GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 22006,'image'=>'/assets/images/iPhone/12/iphone-12-green.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 64GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 21590, 'discount'=>20000,'image'=>'/assets/images/iPhone/12/iphone-12-red.jpg', 'subcategory_id' => 3]);
        Product::create(['name' => 'iPhone 12 64GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 22006,'image'=>'/assets/images/iPhone/12/iphone-12-blue.jpg', 'subcategory_id' => 3]);

    }
}
