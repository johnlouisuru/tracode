<?php

namespace App\Http\Controllers;
use App\Models\csharpquiz;
use App\Models\User;
use App\Models\csharpscoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Quizzescsharp extends Controller
{
    public function show($id)
    {
       // $scorings=scoring::where('id',$id)->first();
        $csharpquizs=csharpquiz::find($id);

        if(!$csharpquizs){

            return view('difficultylevelcsharp.notfound');
        }
               /* if(Auth::user()->id == $scorings->iduser && $phpquizs->id == $scorings->idquizz ){
                    return view('difficultylevel.phpquizstartrep')->with('phpquizs', $phpquizs);
                  
                }
                

            else{
               
                
        
            } */
            return view('difficultylevelcsharp.csharpquizstart')->with('csharpquizs',$csharpquizs);
        }

    public function edit($id)
    {
        $users=User::find($id);
        return view('difficultylevelcsharp.csharpquizstart')->with('users',$users);
    }

    public function update(Request $request, $id)
    {
       
        $csharpscoring = csharpscoring::where(['iduser'=>$id,'idquizz'=>$request->input('idquizz')])->first();
        if($csharpscoring){
            if($csharpscoring->point == 0){
                $users =User::find($id);
                $users->csharpscore += 1;
                $users->save();  
                $csharpscoring->point +=1;
                $csharpscoring->save();
                
            }
        }
   
            return redirect('/csharpquizbasicdifficult');
       
      
    }
}
