<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ReservedController extends Controller
{
    public function reserved()
    {

        $categories = Category::with('subcategories')->get();

        $orderNumber=rand(1500,50000);

        return view('OrderProduct.reserved', compact('categories','orderNumber'));
    }
}
