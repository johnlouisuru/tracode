<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phpquiz;
class QuizController extends Controller
{
    public function index(Request $request){
      $defaultcategory = 'Basic';
    
      if($request->has('category')){
        if($request->category == 2){
            $defaultcategory = 'Intermediate';
        }
        if($request->category == 3){
            $defaultcategory = 'Advance';
        }
      }
    
      $phpquizs = phpquiz::where('category',$defaultcategory)->orderBy('point','ASC')->get();
      
      return view('difficultylevel.phpquiz_new')->with(['phpquizs'=>$phpquizs,'category'=>$defaultcategory]);
    }
    public function php_specific_quiz(Request $request,$id){
        $phpquizs=phpquiz::find($id);

        if(!$phpquizs){

            return view('difficultylevel.notfound');
        }

        return view('difficultylevel.phpquizstart')->with('phpquizs',$phpquizs);

    }


}
