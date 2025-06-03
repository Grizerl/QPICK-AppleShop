<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Contracts\View\View;

class SubcategoryController extends Controller
{
    /**
     * Summary of show
     * @param \App\Models\Subcategory $subcategory
     * @return View
     */
    public function show(Subcategory $subcategory): View
    {
        $categories = Category::with('subcategories')->get();

        $products = $subcategory->products;

        return view('subcategories.show', compact('subcategory', 'products', 'categories'));
    }
}
