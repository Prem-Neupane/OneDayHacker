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
        dd($users);
    return view('backend.index')->with('users', $users)->with('places', $places);
   }
   public function get_guide($id){
        $user = User::find($id);
        dd($user);
    return view('backend.index')->with('user', $user);
   }
   public function get_places($id){
        $place = Place::find($id);
        dd($place);
    return view('backend.index')->with('place', $place);
   }
}
