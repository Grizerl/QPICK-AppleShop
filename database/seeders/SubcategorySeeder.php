<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::create(['name' => 'Apple iPhone SE', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 11', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 12', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 13 mini', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 13', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 14 Plus', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 14', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 15 Plus', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 15', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 15 Pro', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 15 Pro Max', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 16 Plus', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 16', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 16 Pro', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple iPhone 16 Pro Max', 'category_id' => 1]);
        Subcategory::create(['name' => 'Apple AirPods 2', 'category_id' => 2]);
        Subcategory::create(['name' => 'Apple AirPods 3', 'category_id' => 2]);
        Subcategory::create(['name' => 'Apple AirPods 4', 'category_id' => 2]);
        Subcategory::create(['name' => 'Apple AirPods Max', 'category_id' => 2]);
        Subcategory::create(['name' => 'Apple AirPods Max 2', 'category_id' => 2]);
        Subcategory::create(['name' => 'Apple AirPods Pro', 'category_id' => 2]);
        Subcategory::create(['name' => 'Apple AirPods Pro 2', 'category_id' => 2]);
        Subcategory::create(['name' => 'MacBook Air', 'category_id' => 3]);
        Subcategory::create(['name' => 'MacBook Pro', 'category_id' => 3]);
        Subcategory::create(['name' => 'iMac', 'category_id' => 3]);
        Subcategory::create(['name' => 'Mac mini', 'category_id' => 3]);
        Subcategory::create(['name' => 'Mac Studio', 'category_id' => 3]);
    }
}
