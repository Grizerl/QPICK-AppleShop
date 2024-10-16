<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone15Plus_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 15 Plus 128GB (Black) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38799, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-black.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 128GB (Green)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38599, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-green.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 128GB (Pink) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38599, 'discount'=>38000, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-pink.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 128GB (Green) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38799, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-green.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 128GB (Blue) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38599, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-blue.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 256GB (Black)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 42999, 'discount'=>42000, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-black.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 256GB (Blue) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 40550, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-blue.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 256GB (Blue)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38590, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-blue.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 256GB (Yellow)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 39690, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-yellow.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 512GB (Yellow)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 60599, 'discount'=>60390, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-yellow.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 512GB (Pink) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 61500, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-pink.jpg', 'subcategory_id' => 8]);
        Product::create(['name' => 'iPhone 15 Plus 512GB (Yellow) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 59999, 'image'=>'/assets/images/iPhone/15_Plus/iPhone-15-Plus-yellow.jpg', 'subcategory_id' => 8]);
    }
}
