<?php

namespace Database\Seeders\ConsoleGamingSeeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Console_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     function run(): void
    {
        Product::create(['name' => 'Ігрова приставка Sony PlayStation 5 Slim', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>19999, 'image'=>'/assets/images/Console/consoleGaming/console.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Ігрова приставка Valve Steam Deck OLED', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>26066, 'image'=>'/assets/images/Console/consoleGaming/console2.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Ігрова приставка Microsoft Xbox (Series X)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21999, 'image'=>'/assets/images/Console/consoleGaming/console3.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Портативна ігрова приставка Nintendo Switch', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>12599, 'image'=>'/assets/images/Console/consoleGaming/console4.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Портативна ігрова приставка Nintendo Switch', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>12599, 'image'=>'/assets/images/Console/consoleGaming/console5.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Портативна ігрова приставка Nintendo Switch', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>12599, 'image'=>'/assets/images/Console/consoleGaming/console6.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Ігрова приставка Sony PlayStation 5 Slim', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>12599, 'image'=>'/assets/images/Console/consoleGaming/console7.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Портативна ігрова приставка Nintendo Switch', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>12599, 'image'=>'/assets/images/Console/consoleGaming/console8.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Портативна ігрова приставка Nintendo Switch', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>26066, 'image'=>'/assets/images/Console/consoleGaming/console9.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Портативна ігрова приставка Nintendo Switch', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>19999, 'image'=>'/assets/images/Console/consoleGaming/console10.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Ігрова приставка Microsoft Xbox (Series X)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>19560, 'image'=>'/assets/images/Console/consoleGaming/console11.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Ігрова приставка Microsoft Xbox (Series X)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>23056, 'image'=>'/assets/images/Console/consoleGaming/console12.webp', 'subcategory_id' => 34]);
        Product::create(['name' => 'Ігрова приставка Microsoft Xbox (Series X)', 'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века', 'price' =>21089, 'image'=>'/assets/images/Console/consoleGaming/console13.webp', 'subcategory_id' => 34]);
    }
}


