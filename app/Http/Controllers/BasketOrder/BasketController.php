<?php

namespace App\Http\Controllers\BasketOrder;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Contracts\View\View;

class BasketController extends Controller
{
    /**
     * Summary of basket
     * @return View
     */
    public function basket(): View
    {
        $categories = Category::with('subcategories')->get();

        $orders = Order::paginate(5);

        return view('basket.showOrders', compact('categories', 'orders'));
    }
}
