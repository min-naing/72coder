<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewsFormRequest;
use App\Review;
use Session;


class AppController extends Controller
{

    function app($title = 'home') {

        $reviews = Review::all();

        return view('app.' . $title, compact('reviews'));

    }

    function reviews_store(ReviewsFormRequest $request, $title = null) {

        $review = new Review();

        $review->app_name = $title;
        $review->username = $request->get('username');
        $review->email = $request->get('email');
        $review->content = $request->get('content');

        if( $review->save() ) {
            Session::flash('success', 'Your Review has been submitted.');
        } else {
            Session::flash('error', 'Something went wrong');
        }

        return redirect()->back();

    }

}
