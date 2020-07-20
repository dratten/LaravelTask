<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function particularReview($id)
    {
        $reviews = DB::table('reviews')->select('review')->where('car_id','=',$id)->get();
        return view('particularreview', ['review' => $reviews]);
    }
}
