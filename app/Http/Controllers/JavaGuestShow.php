<?php

namespace App\Http\Controllers;
use App\Models\javatab;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class JavaGuestShow extends Controller
{
    public function show($id) {
        $javatabs=javatab::find($id);
        if($javatabs->category =='Advance'){
            if($javatabs->filename != null){
                return view('javaguestlang.javashowadvance')->with('javatabs',$javatabs);
            }
            else{

                if($javatabs->codes != null){
                    return view('javaguestlang.javashowguest')->with('javatabs',$javatabs);
                }

                else{
                    return view('javaguestlang.javashowguestcode')->with('javatabs',$javatabs);
                }
               
            }
        }
        else{
            if($javatabs->codes != null){
                return view('javaguestlang.javashowguest')->with('javatabs',$javatabs);
            }

            else{
                return view('javaguestlang.javashowguestcode')->with('javatabs',$javatabs);
            }
        }
    }

}
