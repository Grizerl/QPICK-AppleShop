<?php

namespace Database\Seeders\MacbookSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class MacbookAir_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Apple MacBook Air 13, 2022 (256GB) M2', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 35152, 'image'=>'/assets/images/Macbook/Air/Macbook Air 1.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'Apple MacBook Air 13, 2020 (256GB) M1', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 28704, 'image'=>'/assets/images/Macbook/Air/Macbook Air 2.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'Apple MacBook Air 13, 2020 (256GB) M1', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 28104, 'image'=>'/assets/images/Macbook/Air/Macbook Air 2.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'Apple MacBook Air 13, 2020 (256GB) M1', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 28496, 'image'=>'/assets/images/Macbook/Air/Macbook Air 2.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'MacBook Air 13, Space Gray, 256GB M2',  'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 35152, 'image'=>'/assets/images/Macbook/Air/Macbook Air 3.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'MacBook Air 13, Midnight, 256GB M3', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 35152, 'image'=>'/assets/images/Macbook/Air/Macbook Air 4.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'MacBook Air 13, Silver, 256GB M2', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 30154, 'image'=>'/assets/images/Macbook/Air/Macbook Air 5.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'MacBook Air 13, Starlight, 256GB M2', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 28740, 'image'=>'/assets/images/Macbook/Air/Macbook Air 6.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'MacBook Air 15, Midnight, 256GB, M2', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 45220, 'image'=>'/assets/images/Macbook/Air/Macbook Air 7.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'MacBook Air 13, Starlight, 512GB, M2', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 30153, 'image'=>'/assets/images/Macbook/Air/Macbook Air 3.webp', 'subcategory_id' => 23]);
        Product::create(['name' => 'Apple MacBook Air 13, 2022 (256GB) M2 ', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => 25891, 'image'=>'/assets/images/Macbook/Air/Macbook Air 5.webp', 'subcategory_id' => 23]);

    }
}