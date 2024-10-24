<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->get();
    
        return view('categories.index', compact('categories'));
    }

    // public function show(Category $category)
    // {
    //     return view('categories.show', compact('category'));
    // }
  
}
