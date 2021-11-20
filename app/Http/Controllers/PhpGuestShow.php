<?php

namespace App\Http\Controllers;
use App\Models\phptab;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class PhpGuestShow extends Controller
{
    public function show($id)
    {
       $phptabs=phptab::find($id);

       if($phptabs->category == 'Advance'){
           if($phptabs->filename != null){
        return view('phpguestbasictry.phpshowadvance')->with('phptabs',$phptabs);
           }
           else{

            if($phptabs->codes != null){
                return view('phpguestbasictry.phpshowguest')->with('phptabs',$phptabs); 
            }

            else{
                return view('phpguestbasictry.phpshowguestcode')->with('phptabs',$phptabs); 
            }
            
           }
       }
       else{
        if($phptabs->codes != null){
            return view('phpguestbasictry.phpshowguest')->with('phptabs',$phptabs); 
        }

        else{
            return view('phpguestbasictry.phpshowguestcode')->with('phptabs',$phptabs); 
        }
       }
    }
}
