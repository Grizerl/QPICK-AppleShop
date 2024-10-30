<?php

namespace App\Http\Controllers\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Orders;
use App\Models\Product;
use App\Models\PromoCode;

use function Laravel\Prompts\select;

class OrderController extends Controller
{
    public function order(Request $request, $id)
    {
        $categories = Category::with('subcategories')->get();
        
        $product = Product::findOrFail($id);
        
        $randomNumber = rand(500, 1500);
        
        return view('OrderProduct.order', compact('product', 'categories', 'randomNumber'));   
    }
}
