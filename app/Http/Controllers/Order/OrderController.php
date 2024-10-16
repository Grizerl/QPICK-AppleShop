<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order($id)
    {

        $categories = Category::with('subcategories')->get();

        $product=Product::findOrFail($id);

        $randomNumber = rand(500, 5000);

        $promoCode = PromoCode::all();

        return view('OrderProduct.order',compact('product','categories','randomNumber','promoCode'));
    }
}
