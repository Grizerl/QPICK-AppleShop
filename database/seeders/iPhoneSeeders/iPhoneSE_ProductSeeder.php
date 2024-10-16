<?php

namespace Database\Seeders\iPhoneSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class iPhoneSE_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'iPhone SE 64GB (Starlight) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 15600, 'image'=>'/assets/images/iPhone/SE/iphone-se-starlight.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 64GB (Red) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 15600, 'image'=>'/assets/images/iPhone/SE/iphone-se-red.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 128GB (Midnight) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 17500, 'discount'=>17000, 'image'=>'/assets/images/iPhone/SE/iphone-se-midnight.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 64GB (Starlight) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 15300, 'image'=>'/assets/images/iPhone/SE/iphone-se-starlight.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 128GB (Starlight) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 17000, 'image'=>'/assets/images/iPhone/SE/iphone-se-starlight.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 128GB (Red) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 18300, 'discount'=>17500, 'image'=>'/assets/images/iPhone/SE/iphone-se-red.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 256GB (Starlight) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 19600, 'image'=>'/assets/images/iPhone/SE/iphone-se-starlight.jpg', 'subcategory_id' => 1]);
        Product::create(['name' => 'iPhone SE 256GB (Red) 2022', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 19300, 'discount'=>19000, 'image'=>'/assets/images/iPhone/SE/iphone-se-red.jpg', 'subcategory_id' => 1]);
    }
}
