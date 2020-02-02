<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
      return view('view.user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //to rendering Create form
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //to create new users
        $this->validate($request,[
            'password'=>'string|required',
            'confirm_password'=>'same:password|string|required'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->role = $request->role;
        $user->dob = $request->dob;
        $user->image = $request->image;
        $user->location = $request->location;
        $user->language = $request->language;
        $user->bio = $request->bio;
        $user->save();
        return redirect()->route('users.index')->with('success','user created successfully !!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if ($request->ajax()) {

            $user = User::find($id);
            try {
                if ($user) { }
                if ($user->delete()) {
                    $request->session()->flash('success', 'User Details Successfully Deleted.');
                    return response()->json(['status' => true]);
                }
            } catch (Exception $ex) {
                $request->session()->flash('failure', 'User Details Could Not Be Deleted.');
                $request->session()->flash('failure', $ex->getMessage());
                return response()->json(['status' => $ex->getMessage()]);
            }
        }
    }

    public function log_out(){
        Auth::logout();
        return redirect('/login');
    }
}
