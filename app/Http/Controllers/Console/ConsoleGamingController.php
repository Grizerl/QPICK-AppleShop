<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ConsoleGamingController extends Controller
{
    public function index(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = Product::where('subcategory_id',34)->get(); 
        
        return view('console.accessoriesConsole',compact('subcategory', 'products', 'categories'));
    }

    public function accessories(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = Product::where('subcategory_id',35)->get(); 
        
        return view('console.accessoriesConsole',compact('subcategory', 'products', 'categories'));
    }

    public function games(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = Product::where('subcategory_id',36)->get(); 
        
        return view('console.accessoriesConsole',compact('subcategory', 'products', 'categories'));
    }
}
