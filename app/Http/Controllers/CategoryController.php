<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    /**
     * Summary of index
     * @return View
     */
    public function index(): View
    {
        $categories = Category::with('subcategories')->get();

        return view('categories.index', compact('categories'));
    }

}
