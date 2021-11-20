<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class UserProfileEdit extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('ProfileEditing.ProfileEdit')->with('users',$users);
    }

    public function edit($id)
    {
        $users=User::find($id);
        return view('ProfileEditing.EditingName')->with('users',$users);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);

        $users =User::find($id);
        $users->name=$request->input('name');
        $users->save();

         return redirect('/ProfileEditing')->with('success','New Learning Updated');
    }

   

    public function show($id)
    {
        $users=User::find($id);
        return view('ProfileEditing.EditingName')->with('users',$users);

    }
}
