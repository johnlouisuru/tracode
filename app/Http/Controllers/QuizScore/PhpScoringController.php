<?php

namespace App\Http\Controllers;
use App\Models\scoring;
use App\Models\phpquiz;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
class PhpScoringController extends Controller
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
        return view ('difficultylevel.phpquizstartins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $scoring = scoring::where(['iduser'=>$request->input('iduser'),'idquizz'=>$request->input('idquizz')])->first();
        if($scoring){
            
                return redirect('/phpquizbasicdifficult'); 
         
        }
        
        $scorings = new scoring();
        $scorings->iduser=$request->input('iduser');
        $scorings->idquizz=$request->input('idquizz');
        $scorings->difficulty=$request->input('difficulty');
        $scorings->ans="answered";
        $scorings->save();

        return redirect("/insertquiz?id=".$request->input('idquizz'));

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
