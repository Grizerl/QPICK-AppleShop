<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Subcategory;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    /**
     * Summary of show
     * @param \App\Models\Subcategory $subcategory
     * @return JsonResponse|mixed
     */
    public function show(Subcategory $subcategory): JsonResponse
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

    /**
     * Summary of detaile
     * @param int $id
     * @return JsonResponse|mixed
     */
    public function detaile(int $id): JsonResponse
    {

        $product = Product::findOrFail($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $reviews = Review::paginate(3);

        if (!$reviews) {
            return response()->json(['message' => 'Reviews not found for this product'], 404);
        }

        return response()->json([
            'products' => $product,
            'reviews' => $reviews,
        ]);
    }

    public function review(ReviewRequest $request)
    {
        $validateDate = $request->validated();

        $reviews = new review();
        $reviews->name = $validateDate['name'];
        $reviews->comment = $validateDate['input_review'];
        $reviews->save();

        return response()->json(['reviews' => $reviews]);
    }
}
