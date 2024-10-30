<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Http\Request;

class ReservedController extends Controller
{
    public function reserved($id)
    {

        $categories = Category::with('subcategories')->get();

        $order = Orders::find($id);

        return view('OrderProduct.reserved', compact('order','categories'));
    }
}
