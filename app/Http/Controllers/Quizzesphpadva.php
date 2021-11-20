<?php

namespace App\Http\Controllers;
use App\Models\phpquiz;
use App\Models\User;
use App\Models\scoring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Quizzesphpadva extends Controller
{
    public function show($id)
    {
       // $scorings=scoring::where('id',$id)->first();
        $phpquizs=phpquiz::find($id);

        if(!$phpquizs){

            return view('difficultylevel.notfound');
        }
               /* if(Auth::user()->id == $scorings->iduser && $phpquizs->id == $scorings->idquizz ){
                    return view('difficultylevel.phpquizstartrep')->with('phpquizs', $phpquizs);
                  
                }
                

            else{
               
                
        
            } */
            return view('difficultylevel.phpquizstartadva')->with('phpquizs',$phpquizs);
        }

    public function edit($id)
    {
        $users=User::find($id);
        return view('difficultylevel.phpquizstartadva')->with('users',$users);
    }

    public function update(Request $request, $id)
    {
       
        $scoring = scoring::where(['iduser'=>$id,'idquizz'=>$request->input('idquizz')])->first();
        if($scoring){
            if($scoring->point == 0){
                $users =User::find($id);
                $users->phpscore += 1;
                $users->save();  
                $scoring->point +=1;
                $scoring->save();
                
            }
        }
   
            return redirect('/phpquizadvadifficult');
       
      
    }
}
