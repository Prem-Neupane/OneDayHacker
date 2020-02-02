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
       $users = User::all();
       $places = Place::all();
    //    dd($places);
       $view->with('users',$users)->with('places',$places);
    }
}
//
