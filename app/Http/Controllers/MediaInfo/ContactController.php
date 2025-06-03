<?php

namespace App\Http\Controllers\MediaInfo;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    /**
     * Summary of contact
     * @return View
     */
    public function contact(): View
    {
        $categories = Category::with('subcategories')->get();

        return view('contact.info', compact('categories'));
    }
}
