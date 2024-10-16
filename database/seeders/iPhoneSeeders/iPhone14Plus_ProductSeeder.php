<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone14Plus_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 14 Plus 512GB (Blue) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 44054, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-blue.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49046, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-purple.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Midnight) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 41558, 'discount'=>41400, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-black.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Purple) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 44054, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-purple.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Startlight) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 44054, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-white.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49046, 'discount'=>49000, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-black.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Red) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 44054, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-red.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Starlight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49046, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-white.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 256GB (Yellow) (MR6D3)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 36599, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-yellow.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Yellow) (MR6D3)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 49046, 'discount'=>49000, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-yellow.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 256GB (Yellow) (e-Sim) (MR6D3)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 32448, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-yellow.jpg', 'subcategory_id' => 6]);
        Product::create(['name' => 'iPhone 14 Plus 512GB (Yellow) (e-Sim) (MR6D3)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 46639, 'image'=>'/assets/images/iPhone/14_Plus/iPhone-14-Plus-yellow.jpg', 'subcategory_id' => 6]);
    }
}
