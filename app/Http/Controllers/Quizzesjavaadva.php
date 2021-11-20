<?php

namespace App\Http\Controllers;
use App\Models\javaquiz;
use App\Models\User;
use App\Models\javascoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Quizzesjavaadva extends Controller
{
    public function show($id)
    {
       // $scorings=scoring::where('id',$id)->first();
        $javaquizs=javaquiz::find($id);

        if(!$javaquizs){

            return view('difficultyleveljava.notfound');
        }
               /* if(Auth::user()->id == $scorings->iduser && $phpquizs->id == $scorings->idquizz ){
                    return view('difficultylevel.phpquizstartrep')->with('phpquizs', $phpquizs);
                  
                }
                

            else{
               
                
        
            } */
            return view('difficultyleveljava.javaquizstartadva')->with('javaquizs',$javaquizs);
        }

    public function edit($id)
    {
        $users=User::find($id);
        return view('difficultyleveljava.javaquizstart')->with('users',$users);
    }

    public function update(Request $request, $id)
    {
       
        $javascoring = javascoring::where(['iduser'=>$id,'idquizz'=>$request->input('idquizz')])->first();
        if($javascoring){
            if($javascoring->point == 0){
                $users =User::find($id);
                $users->javascore += 1;
                $users->save();  
                $javascoring->point +=1;
                $javascoring->save();
                
            }
        }
   
            return redirect('/javaquizadvadifficult');
       
      
    }
}
