<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $places = Place::all();
       return view('backend.place.index')->with('places',$places);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $place = new Place();
        $place->title = $request->title;
        $place->place_name = $request->place_name;
        $place->district = $request->district;
        $place->city = $request->city;
        $place->description = $request->description;
        // $place->avg_rating =
        // $place->rating_count =
        $place->save();
        return redirect()->route('place.index')->with('suceess','place create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $place = Place::find($id);
       return view('backend.place.edit')->with('place',$place);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $place = Place::find($id);
        $place->title = $request->title;
        $place->place_name = $request->place_name;
        $place->district = $request->district;
        $place->city = $request->city;
        $place->description = $request->description;
        // $place->avg_rating =
        // $place->rating_count =
        $place->save();
        return redirect()->route('place.index')->with('suceess', 'place Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
