<?php

namespace App\Http\Controllers\ShowProductsDetaile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DetaileController extends Controller
{
    public function detaile($id)
    {
        $categories = Category::with('subcategories')->get();

        $product=Product::findOrFail($id);
        
        return view('ShowProducts.product',compact('product','categories'));
    }
}
