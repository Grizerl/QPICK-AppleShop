<?php

namespace App\Http\Controllers\BasketOrder;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $categories = Category::with('subcategories')->get();

        $orders =Orders::paginate(5);

        return view('basket.showOrders', compact( 'categories','orders'));
    }
}
