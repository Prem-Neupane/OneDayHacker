<?php

namespace App\Http\Controllers;

use App\Place;
use App\Review;
use App\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$tourist_id,$place_id)
    {

        $place =Place::find($place_id);
        $review = new Review;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->tourist_id = $tourist_id;
        $review->place_id = $place->id;
        $review->save();
        $avg_rating = Review::where('place_id',$place_id)->pluck('rating')->avg();
        $place->avg_rating = $avg_rating;
        $place->rating_count+=1;
        $place->save();
        return redirect()->back();
    }
    public function store_guide_review(Request $request,$tourist_id,$guide_id)
    {

        $guide = Guide::find($guide_id);
        $review = new Review;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->tourist_id = $tourist_id;
        $review->guide_id = $guide->id;
        $review->save();
        $avg_rating = Review::where('guide_id', $guide_id)->pluck('rating')->avg();
        $guide->avg_rating = $avg_rating;
        $guide->rating_count += 1;
        $guide->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
