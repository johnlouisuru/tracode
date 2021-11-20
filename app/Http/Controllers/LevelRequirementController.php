<?php

namespace App\Http\Controllers;
use App\Models\reqscore;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class LevelRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phptabs = reqscore::all();
        return view('admintoolreq.index')->with('phptabs',$phptabs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admintoolsreq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'Languages'=>'required',
            'Intermediate'=>'required',
            'Advance'=>'required',

            'Intermediate'=>'integer',
            'Advance'=>'integer'
        ]);

        $phptabs = new reqscore();
        $phptabs->Languages=$request->input('Languages');
        $phptabs->Intermediate=$request->input('Intermediate');
        $phptabs->Advance=$request->input('Advance');
        $phptabs->save();

      return redirect('/phpquizrequire')->with('success', 'New Record Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phptabs = reqscore::find($id);
        return view('admintoolsreq.show')->with('phptabs',$phptabs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $phptabs = reqscore::find($id);
        return view('admintoolsreq.edit')->with('phptabs',$phptabs);
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
        $this->validate($request,[
            'Languages'=>'required',
            'Intermediate'=>'required',
            'Advance'=>'required',

            'Intermediate'=>'integer',
            'Advance'=>'integer'
        ]);

        $phptabs = reqscore::find($id);
        $phptabs->Languages=$request->input('Languages');
        $phptabs->Intermediate=$request->input('Intermediate');
        $phptabs->Advance=$request->input('Advance');
        $phptabs->save();
        return redirect('/phpquizrequire')->with('success', 'New Record Updated');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phptabs =reqscore::find($id);
        $phptabs->delete();

        return redirect('/phpquizrequire')->with('success','Required score Removed');
    }
}
