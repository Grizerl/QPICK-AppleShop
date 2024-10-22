<?php

namespace Database\Seeders\ConsoleGamingSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Games_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     function run(): void
    {
        Product::create(['name' => 'Гра Hogwarts Legacy', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games.webp', 'subcategory_id' => 36]);
        Product::create(['name' => 'Гра EA SPORTS FC 24', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games2.webp', 'subcategory_id' => 36]);
        Product::create(['name' => 'Гра Elden Ring', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games3.webp', 'subcategory_id' => 36]);
        Product::create(['name' => 'Гра Gran Turismo 7', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games4.webp', 'subcategory_id' => 36]);
        Product::create(['name' => 'Гра Grand Theft Auto V Premium Edition', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games5.webp', 'subcategory_id' => 36]);
        Product::create(['name' => 'Гра Hogwarts Legacy', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games6.webp', 'subcategory_id' => 36]);
        Product::create(['name' => 'Гра Horizon Forbidden West', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>2499, 'image'=>'/assets/images/Console/games/games7.webp', 'subcategory_id' => 36]);
       
    }
}

                    

                                                      
                      





