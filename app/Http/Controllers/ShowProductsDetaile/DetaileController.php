<?php

namespace App\Http\Controllers\ShowProductsDetaile;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\review;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DetaileController extends Controller
{
    public function detaile($id)
    {
        $categories = Category::with('subcategories')->get();

        $product=Product::findOrFail($id);

        $reviews =review::paginate(3);
        
        return view('ShowProducts.product',compact('product','categories','reviews'));
    }
}
