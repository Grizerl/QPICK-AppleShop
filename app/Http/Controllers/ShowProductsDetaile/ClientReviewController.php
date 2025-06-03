<?php

namespace App\Http\Controllers\ShowProductsDetaile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;

class ClientReviewController extends Controller
{
    /**
     * Summary of review
     * @param \App\Http\Requests\ReviewRequest $request
     * @return mixed|RedirectResponse
     */
    public function review(ReviewRequest $request): RedirectResponse
    {
        $validateDate = $request->validated();

        $reviews = new Review();
        $reviews->name = $validateDate['name'];
        $reviews->comment = $validateDate['input_review'];
        $reviews->save();

        return redirect()->back();
    }
}
