<?php

namespace App\Http\Controllers;

use App\User;
use App\Place;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function dashboard_data(){
        $users = User::all();
        $places = Place::all();
    return view('backend.index')->with('users', $users)->with('places', $places);
   }
   public function get_guide($id){
        $user = User::find($id);
    return view('frontend.guide-profile')->with('user', $user);
   }
   public function get_place($id){
        $guides = User::where('role', 'guide')->take(4)->get();

        $place = Place::find($id);
    return view('frontend.single-place')->with('place', $place)->with('topGuides', $guides);
   }
   public function get_hire_page($id){
       $user = User::where('id',$id)->first();
    return view('frontend.hire')->with('guie', $user);
   }
}
