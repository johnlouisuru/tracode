<?php

namespace App\Http\Controllers;
use App\Models\phptab;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class PhpGuestAdvance extends Controller
{
    public function show($id)
    {
       $phptabs=phptab::find($id);
       return view('phpguestbasictry.showadvance')->with('phptabs',$phptabs);
    }
}
