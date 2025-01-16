<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\review;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function show(Subcategory $subcategory) 
    {
 
        $categories = Category::with('subcategories')->get();
    
        $products = $subcategory->products;
    
        if (!$subcategory) {
            return response()->json(['message' => 'Subcategory not found'], 404);
        }
    
        return response()->json([
            'subcategory' => $subcategory,
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function detaile($id)
    {

        $product=Product::findOrFail($id);

        if(!$product) {
            return response()->json(['message' => 'Product not found'],404);
        }

        $reviews =review::paginate(3);

        if(!$reviews) {
            return response()->json(['message' => 'Reviews not found for this product'],404);
        }
        
        return response()->json([
            'products' => $product,
            'reviews' => $reviews,
        ]);
    }

    public function review(ReviewRequest $request)
    {
        $validateDate=$request->validated();

        $reviews = new review();
        $reviews->name=$validateDate['name'];
        $reviews->comment=$validateDate['input_review'];
        $reviews->save();

        return response()->json(['reviews' => $reviews]);
    }
}
