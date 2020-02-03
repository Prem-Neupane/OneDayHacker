<?php

namespace App\Http\ViewComposer;

use App\Place;
use App\User;
use Illuminate\View\View;

class HomeComposer
{
    // Mainmenu and Footer are diffrent menuitem as defined by boolean(mainmennu or footer)->Db:

    public function dashboard_data(View $view)
    {
       $users_count = User::count();
       $guides_count = User::where('role','guide')->count();
       $tourists_count = User::where('role','tourist')->count();
       $places_count = Place::count();
       $places_count = Place::all();
       $guides = User::where('role','guide')->take(10)->get();
       $users = User::all();
       $places = Place::take(10)->get();
       $view->with('users',$users)->with('places',$places)
                    ->with('guides', $guides)
                    ->with('users_count', $users_count)
                    ->with('tourists_count', $tourists_count)
                    ->with('places_count', $places_count)
                    ->with('guides_count', $guides_count);
    }
    public function topGuides(View $view)
    {
        $guides = User::where('role', 'guide')->take(4)->get();
        $view->with('topGuides', $guides);
    }
    public function topPlaces(View $view)
    {
        $places = Place::take(3)->get();
        $view->with('topPlaces', $places);
    }

}
