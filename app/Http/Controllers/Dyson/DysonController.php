<?php

namespace App\Http\Controllers\Dyson;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DysonController extends Controller
{
    public function index(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = Product::where('subcategory_id',28)->get(); 
        
        return view('dyson.dysonAccessories',compact('subcategory', 'products', 'categories'));
    }
    public function hairDryer(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = Product::where('subcategory_id',29)->get(); 
        
        return view('dyson.dysonAccessories',compact('subcategory', 'products', 'categories'));
    }
    public function rectifiers(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = Product::where('subcategory_id',30)->get(); 
        
        return view('dyson.dysonAccessories',compact('subcategory', 'products', 'categories'));
    }
}
