<?php

namespace App\Http\Controllers\ShowProductsDetaile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\review;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function review(ReviewRequest $request)
    {
        $validateDate=$request->validated();

        $reviews = new review();
        $reviews->name=$validateDate['name'];
        $reviews->comment=$validateDate['input_review'];
        $reviews->save();

        return redirect()->back();
    }
}
