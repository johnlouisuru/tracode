<?php

namespace App\Http\Controllers;
use App\Models\csharp;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class CsharpGuestAdvance extends Controller
{
        public function show($id)
    {
        $csharps=csharp::find($id);

        return view('csharpguestlang.csharpshowguest')->with('csharps',$csharps);
      
    }

}
