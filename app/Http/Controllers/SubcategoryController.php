<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show(Subcategory $subcategory)
    {
        $categories = Category::with('subcategories')->get();

        $products = $subcategory->products; 
        
        return view('subcategories.show', compact('subcategory', 'products', 'categories'));
    }
}


