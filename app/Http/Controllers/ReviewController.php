<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        $review = ReviewModel::orderBy("created_at","desc")->get();
        return view('review', ['reviewList' => $review]);
    }

    public function form()
    {
        //dd( request('userName_feed') .request('comment_feed'));

        /*
         * $table->string('user');
            $table->string('title');
            $table->integer('rate');
            $table->text('comment');
         */


        $title = request('title_feed');
        $rate = request('drone');
        $comment = request('comment_feed');
        $userName = request('userName_feed');
        //ReviewModel::save()
        $review = new ReviewModel();
        $review->title = $title;
        $review->comment = $comment;
        $review->rate = $rate;
        $review->user = $userName;
        $review->save();
        //return "data form" . request('title_feed');
        $review = ReviewModel::orderBy("created_at","desc")->get();
        return view('review', ['reviewList' => $review]);
    }

}
