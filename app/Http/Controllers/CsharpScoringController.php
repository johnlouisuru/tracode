<?php

namespace App\Http\Controllers;
use App\Models\csharpscoring;
use App\Models\csharpquiz;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class CsharpScoringController extends Controller
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
        return view ('difficultylevelcsharp.csharpquizstartins');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $csharpscoring = csharpscoring::where(['iduser'=>$request->input('iduser'),'idquizz'=>$request->input('idquizz')])->first();
        if($csharpscoring){
            
                return redirect('/csharpquizbasicdifficult'); 
         
        }
        
        $csharpscorings = new csharpscoring();
        $csharpscorings->iduser=$request->input('iduser');
        $csharpscorings->idquizz=$request->input('idquizz');
        $csharpscorings->difficulty=$request->input('difficulty');
        $csharpscorings->ans="answered";
        $csharpscorings->save();

        return redirect("/insertquizcsharp?id=".$request->input('idquizz'));

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
