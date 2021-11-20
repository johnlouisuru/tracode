<?php

namespace App\Http\Controllers;

use App\Models\phpquiz;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;


class ControllerPhpquiz extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phpquizs = phpquiz::all();
        return view('phpquizgame.index')->with('phpquizs',$phpquizs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phpquizgame.create');
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
            'title'=>'required'
        ]);

        $phpquizs = new phpquiz();
        $phpquizs->question=$request->input('question');
        $phpquizs->title=$request->input('title');
        $phpquizs->category=$request->input('category');
        $phpquizs->answerkey=$request->input('answerkey');
        $phpquizs->answerkey2=$request->input('answerkey2');
        $phpquizs->answerkey3=$request->input('answerkey3');
        $phpquizs->trivia=$request->input('trivia');

        $phpquizs->save();
        return redirect('/phpquizgame')->with('success', 'New Quiz Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phpquizs=phpquiz::find($id);
        return view('phpquizgame.show')->with('phpquizs',$phpquizs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phpquizs=phpquiz::find($id);
        return view('phpquizgame.edit')->with('phpquizs',$phpquizs);
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

        $phpquizs =phpquiz::find($id);
        $phpquizs->question=$request->input('question');
        $phpquizs->category=$request->input('category');
        $phpquizs->answerkey=$request->input('answerkey');
        $phpquizs->answerkey2=$request->input('answerkey2');
        $phpquizs->answerkey3=$request->input('answerkey3');
        $phpquizs->point +=0;
        $phpquizs->title=$request->input('title');
        $phpquizs->trivia=$request->input('trivia');
        $phpquizs->save();
        return redirect('/phpquizgame')->with('success', 'New Quiz Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phpquizs = phpquiz::find($id);
        $phpquizs->delete();

        return redirect('/phpquizgame')->with('success','Post Removed');
    }
}
