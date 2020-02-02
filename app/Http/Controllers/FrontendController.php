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
}
