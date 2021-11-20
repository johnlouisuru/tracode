<?php

namespace App\Http\Controllers;
use App\Models\csharp;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class CsharpGuestShow extends Controller
{
    public function show($id)
    {
        $csharps=csharp::find($id);

       if($csharps->category =='Advance'){

        if($csharps->filename != null){
        
                return view('csharpguestlang.csharpshowadvance')->with('csharps',$csharps);

        }
            else{

                if($csharps->codes != null){
                    return view('csharpguestlang.csharpshowguest')->with('csharps',$csharps);
                }
                else{
                    return view('csharpguestlang.csharpshowguestcode')->with('csharps',$csharps);
                }
                
            }
           
        
    }
    else{
        if($csharps->codes != null){
            return view('csharpguestlang.csharpshowguest')->with('csharps',$csharps);
        }
        else{
            return view('csharpguestlang.csharpshowguestcode')->with('csharps',$csharps);
        }
    }
    }
}
