<?php

namespace App\Http\Controllers\MediaInfo;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {

        $categories = Category::with('subcategories')->get();

        return view('contact.info',compact('categories'));
    }
}
