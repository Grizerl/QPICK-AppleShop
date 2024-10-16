<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhone14_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone 14 128GB (Blue) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 30399, 'image'=>'/assets/images/iPhone/14/iPhone-14-blue.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 128GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 30199, 'image'=>'/assets/images/iPhone/14/iPhone-14-purple.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 128GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>29999, 'discount'=>28000, 'image'=>'/assets/images/iPhone/14/iPhone-14-black.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 128GB (Purple)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 30399, 'image'=>'/assets/images/iPhone/14/iPhone-14-purple.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 512GB (Startlight) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 34029, 'image'=>'/assets/images/iPhone/14/iPhone-14-white.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 256GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 31574, 'discount'=>31300, 'image'=>'/assets/images/iPhone/14/iPhone-14-black.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 512GB (Red)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 34050, 'image'=>'/assets/images/iPhone/14/iPhone-14-red.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 256GB (Starlight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 36899, 'image'=>'/assets/images/iPhone/14/iPhone-14-white.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 256GB (Yellow) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 37599, 'image'=>'/assets/images/iPhone/14/iPhone-14-yellow.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 512GB (Yellow) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 29958, 'discount'=>28000, 'image'=>'/assets/images/iPhone/14/iPhone-14-yellow.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 256GB (Midnight)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 38505, 'discount'=>34680, 'image'=>'/assets/images/iPhone/14/iPhone-14-black.jpg', 'subcategory_id' => 7]);
        Product::create(['name' => 'iPhone 14 512GB (Yellow) (e-Sim)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 30299, 'image'=>'/assets/images/iPhone/14/iPhone-14-yellow.jpg', 'subcategory_id' => 7]);
    }
}
