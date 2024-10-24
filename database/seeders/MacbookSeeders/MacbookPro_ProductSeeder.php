<?php

namespace Database\Seeders\MacbookSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class MacbookPro_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Apple MacBook Pro 13, 2022 M2 (256GB)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 1.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 13, 2022 M2 (256GB)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 2.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 16 with Apple M2 Pro, 512GB', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 3.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 14, 1TB, M1 Pro', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 6.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 13, 2022 M2 (256GB)',  'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 5.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 14, 1TB, M1 Pro3', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 6.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 16 with Apple M2 Pro, 512GB', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 7.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 14 with Apple M3 Pro, 512GB', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 1.webp', 'subcategory_id' =>24]);
        Product::create(['name' => 'Apple MacBook Pro 13, 2022 M2 (256GB)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' => rand(40000,65000), 'image'=>'/assets/images/Macbook/Pro/MacbookPro 2.webp', 'subcategory_id' =>24]);

    }
}
