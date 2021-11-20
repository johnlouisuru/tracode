<?php

namespace App\Http\Controllers;

use App\Models\csharpquiz;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class ControllerCsharpquiz extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csharpquizs = csharpquiz::all();
        return view('csharpquizgame.index')->with('csharpquizs',$csharpquizs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('csharpquizgame.create');
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

        $csharpquizs = new csharpquiz();
        $csharpquizs->question=$request->input('question');
        $csharpquizs->title=$request->input('title');
        $csharpquizs->category=$request->input('category');
        $csharpquizs->answerkey=$request->input('answerkey');
        $csharpquizs->answerkey2=$request->input('answerkey2');
        $csharpquizs->answerkey3=$request->input('answerkey3');
        $csharpquizs->trivia=$request->input('trivia');

        $csharpquizs->save();
        return redirect('/csharpquizgame')->with('success', 'New Quiz Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $csharpquizs=csharpquiz::find($id);
        return view('csharpquizgame.show')->with('csharpquizs',$csharpquizs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $csharpquizs=csharpquiz::find($id);
        return view('csharpquizgame.edit')->with('csharpquizs',$csharpquizs);
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
            'title'=>'required',
            'category'=>'required',
            'trivia'=>'required',
            'answerkey'=>'required'
        ]);

        $csharpquizs =csharpquiz::find($id);
        $csharpquizs->question=$request->input('question');
        $csharpquizs->title=$request->input('title');
        $csharpquizs->category=$request->input('category');
        $csharpquizs->answerkey=$request->input('answerkey');
        $csharpquizs->answerkey2=$request->input('answerkey2');
        $csharpquizs->answerkey3=$request->input('answerkey3');
        $csharpquizs->trivia=$request->input('trivia');

        $csharpquizs->save();
        return redirect('/csharpquizgame')->with('success', 'New Quiz Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $csharpquizs =csharpquiz::find($id);
        $csharpquizs->delete();

        return redirect('/csharpquizgame')->with('success','Post Removed');
    }
}
