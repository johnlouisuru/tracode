<?php

namespace App\Http\Controllers;
use App\Models\javatab;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class AdminAdvanceJava extends Controller
{
    public function show($id)
    {
        $javatabs=javatab::find($id);
       return view('postjava.show')->with('javatabs',$javatabs);
    }
}
