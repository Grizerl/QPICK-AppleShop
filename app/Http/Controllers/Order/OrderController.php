<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class OrderController extends Controller
{
    /**
     * Summary of order
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return View
     */
    public function order(Request $request, int $id): View
    {
        $categories = Category::with('subcategories')->get();

        $product = Product::findOrFail($id);

        $randomNumber = rand(500, 1500);

        return view('OrderProduct.order', compact('product', 'categories', 'randomNumber'));
    }
}
