<?php

namespace App\Http\Controllers;
use App\Models\javascoring;
use App\Models\javaquiz;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
class JavaScoringControllerinter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view ('difficultyleveljava.javaquizstartins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $javascoring = javascoring::where(['iduser'=>$request->input('iduser'),'idquizz'=>$request->input('idquizz')])->first();
        if($javascoring){
            
                return redirect('/javaquizinterdifficult'); 
         
        }
        
        $javascorings = new javascoring();
        $javascorings->iduser=$request->input('iduser');
        $javascorings->idquizz=$request->input('idquizz');
        $javascorings->difficulty=$request->input('difficulty');
        $javascorings->ans="answered";
        $javascorings->save();

        return redirect("/javainsertquizinter?id=".$request->input('idquizz'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
