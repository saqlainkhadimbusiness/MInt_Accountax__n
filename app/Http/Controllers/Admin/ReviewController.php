<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  App\Review;

class ReviewController extends Controller
{
    function index(){
        $reviews = Review::latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function  edit(Review $reviews){
        $review=$reviews->first();
        return view('admin.reviews.edit',compact('review'));
    }
    public function  create(){
        return view('admin.reviews.create');
    }
     public function  store(Request $request){
         $data=$request->all();
         if(isset($request->image)&& $request->image){
             $imageName =$data['user_image']= time().'.'.$request->image->extension();
             $request->image->move(public_path('review_images'), $imageName);
         }

        Review::create($data);
        return redirect(route('admin.reviews.index'))->with('message', 'Record added successfully');
    }

    public function  destroy(Review $review){
        $review->delete();
    }
    public function update(Request $request, Review $review)
    {
        $data=$request->all();
        if(isset($request->image)&& $request->image){
            $imageName =$data['user_image']= time().'.'.$request->image->extension();
            $request->image->move(public_path('review_images'), $imageName);
        }
        $review->update($data);
        return redirect(route('admin.reviews.index'))->with('message', 'Record Updated successfully');
    }

}
