<?php

namespace App\Http\Controllers;
use App\Models\phptab;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class PhpRegisAdvance extends Controller
{
    public function show($id)
    {
       $phptabs=phptab::find($id);
       return view('phpguestbasictry.phpshowguest')->with('phptabs',$phptabs);
    }
}
