<?php

namespace Database\Seeders\AppleWatchSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class AppleWatch_9_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Apple Watch Series 9 41mm Starlight', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(12000,15500), 'image'=>'/assets/images/Apple Watch/9/AppleWatch9_1.webp', 'subcategory_id' => 45]);
        Product::create(['name' => 'Apple Watch Series 9 44mm Midnight', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(12000,15500), 'image'=>'/assets/images/Apple Watch/9/AppleWatch9_2.webp', 'subcategory_id' => 45]);
        Product::create(['name' => 'Apple Watch Series 9 41mm Pink', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(12000,15500), 'image'=>'/assets/images/Apple Watch/9/AppleWatch9_3.webp', 'subcategory_id' => 45]);
        Product::create(['name' => 'Apple Watch Series 9 44mm Red', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(12000,15500), 'image'=>'/assets/images/Apple Watch/9/AppleWatch9_4.webp', 'subcategory_id' => 45]);
        Product::create(['name' => 'Apple Watch Series 9 41mm Pink', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(12000,15500), 'image'=>'/assets/images/Apple Watch/9/AppleWatch9_3.webp', 'subcategory_id' => 45]);
        Product::create(['name' => 'Apple Watch Series 9 44mm Midnight', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>rand(12000,15500), 'image'=>'/assets/images/Apple Watch/9/AppleWatch9_2.webp', 'subcategory_id' => 45]);
       
        

    }
}
                     
                                    
                                           
                    