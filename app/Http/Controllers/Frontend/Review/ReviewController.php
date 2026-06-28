<?php

namespace App\Http\Controllers\Frontend\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
      public function index(Request $request)
    {
        return view('frontend.pages.review.review_page');
    }
}
    