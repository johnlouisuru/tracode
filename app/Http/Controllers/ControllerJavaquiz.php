<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\javaquiz;
use App\Http\Controllers\MemberController;

class ControllerJavaquiz extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $javaquizs = javaquiz::all();
        return view('javaquizgame.index')->with('javaquizs',$javaquizs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('javaquizgame.create');
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
            'question'=>'required',
            'category'=>'required',
            'trivia'=>'required',
            'answerkey'=>'required',
            'title'=>'required',

        ]);

        $javaquizs = new javaquiz();
        $javaquizs->question=$request->input('question');
        $javaquizs->category=$request->input('category');
        $javaquizs->answerkey=$request->input('answerkey');
        $javaquizs->answerkey2=$request->input('answerkey2');
        $javaquizs->answerkey3=$request->input('answerkey3');
        $javaquizs->trivia=$request->input('trivia');
        $javaquizs->title=$request->input('title');
        $javaquizs->save();
        return redirect('/javaquizgame')->with('success', 'New Quiz Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $javaquizs=javaquiz::find($id);
        return view('javaquizgame.show')->with('javaquizs',$javaquizs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $javaquizs=javaquiz::find($id);
        return view('javaquizgame.edit')->with('javaquizs',$javaquizs);
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
            'question'=>'required',
            'category'=>'required',
            'trivia'=>'required',
            'answerkey'=>'required',
            'title'=>'required'
        ]);

        $javaquizs =javaquiz::find($id);
        $javaquizs->question=$request->input('question');
        $javaquizs->title=$request->input('title');
        $javaquizs->category=$request->input('category');
        $javaquizs->answerkey=$request->input('answerkey');
        $javaquizs->answerkey2=$request->input('answerkey2');
        $javaquizs->answerkey3=$request->input('answerkey3');
        $javaquizs->trivia=$request->input('trivia');
        $javaquizs->save();
        return redirect('/javaquizgame')->with('success', 'New Quiz Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $javaquizs =javaquiz::find($id);
        $javaquizs->delete();

        return redirect('/javaquizgame')->with('success','Post Removed');
    }
}
