<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\review;

class ReviewController extends Controller
{
    public function Review(){
        $review = review::all();
        return view('admin.review',compact('review'));
    }
}
