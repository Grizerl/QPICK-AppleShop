<?php

namespace App\Http\Controllers\ShowProductsDetaile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Contracts\View\View;

class DetaileController extends Controller
{
    /**
     * Summary of detaile
     * @param int $id
     * @return View
     */
    public function detaile(int $id): View
    {
        $categories = Category::with('subcategories')->get();

        $product = Product::findOrFail($id);

        $reviews = Review::paginate(3);

        return view('ShowProducts.product', compact('product', 'categories', 'reviews'));
    }
}
