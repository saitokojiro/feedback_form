<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    

    //
    public function index(Request $request)
    {
        $orderRequest = $request->input('order');
        $starRequest = $request->input('star');
        $review;

        if ($orderRequest !== null) {
            if ($orderRequest === "asc") {
                $review = ReviewModel::orderBy("created_at", "asc")->get();
            } else if ($orderRequest === "desc") {
                $review = ReviewModel::orderBy("created_at", "desc")->get();
            } else {
                $review = ReviewModel::orderBy("id", "asc")->get();
            }

        } else if ($starRequest !== null) {
            if ($starRequest === "asc") {
                $review = ReviewModel::orderBy("rate", "asc")->get();
            } else if ($starRequest === "desc") {
                $review = ReviewModel::orderBy("rate", "desc")->get();
            } else {
                $review = ReviewModel::orderBy("id", "asc")->get();
            }
        } else {
            $review = ReviewModel::orderBy("id", "asc")->get();
        }

        return view('review', ['reviewList' => $review]);
    }

    public function form(Request $request)
    {
        

        $title = request('title_feed');
        $rate = request('drone');
        $comment = request('comment_feed');
        $userName = request('userName_feed');
        $email = request('email_feed');
       /* $img;
        if ($request->hasFile("img_feedback")) {
            $file = $request->file("img_feedback");
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'Upload_Img/';
            $file->move('Upload_Img/', $filename);
            $img = $path . "" . $filename;
        }*/
        //dd($request->input('title_feed'));
//if(data === "jpg" && data === "jpeg" && data === "JPG" && data === "JPEG" && data==="png" && data==="PNG") 
        //ReviewModel::save()
        $review = new ReviewModel();
        $review->title = $title;
        $review->comment = $comment;
        $review->rate = $rate;
        $review->user = $userName;
        $review->email = $email;
        if ($request->hasFile("img_feedback")) {
            $file = $request->file("img_feedback");
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'Upload_Img/';
            $file->move('Upload_Img/', $filename);
            if(data === "jpg" && data === "jpeg" && data === "JPG" && data === "JPEG" && data==="png" && data==="PNG")
            {$review->picture = $path . "" . $filename;}
        }
        //$review->picture = $img;
        $review->save();
        //return "data form" . request('title_feed');
        $review = ReviewModel::orderBy("created_at", "desc")->get();
        return view('review', ['reviewList' => $review]);
    }

}
