<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;

class ReservedController extends Controller
{
    public function reserved($id)
    {

        $categories = Category::with('subcategories')->get();

        $order = Order::findOrFail($id);

        return view('OrderProduct.reserved', compact('order', 'categories'));
    }
}
