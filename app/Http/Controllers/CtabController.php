<?php

namespace App\Http\Controllers;
use App\Models\csharp;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class CtabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csharps = csharp::all();
        return view('postc.index')->with('csharps',$csharps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('postc.create');
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
            'title'=>'required',
            'body'=>'required',
            'category'=>'required',
            'uploadedfile'=>'required'
        ]);

        $csharps = new csharp();
        $csharps->title=$request->input('title');
        $csharps->body=$request->input('body');
        $csharps->category=$request->input('category');
        $csharps->codes=$request->input('codes');
      
        $file = $request->file('uploadedfile');
        $csharps->filename = $file->getClientOriginalName();
        $csharps->filename = time(). '.' . $csharps->filename;
        $path = $file->storeAs('public', $csharps->filename);

        $csharps->save();
     $csharps = csharp::latest()->firstOrFail();
        return redirect('/cdiff')->with('success', 'New Learning Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $csharps=csharp::find($id);
        if($csharps->category == 'Advance'){
            if($csharps->filename != null){
                return view('postc.showadvance')->with('csharps',$csharps);
            }
            else{
                return view('postc.show')->with('csharps',$csharps);
            }
        }
        else{
            return view('postc.show')->with('csharps',$csharps);
        }
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $csharps=csharp::find($id);
        return view('postc.edit')->with('csharps',$csharps);
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
            'title'=>'required',
            'body'=>'required',
            'category'=>'required'
        ]);

        $csharps =csharp::find($id);
        $csharps->title=$request->input('title');
        $csharps->body=$request->input('body');
        $csharps->category=$request->input('category');
        $csharps->codes=$request->input('codes');
        $csharps->save();

        return redirect('/cpost')->with('success','New Learning Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $csharps=csharp::find($id);
        $csharps->delete();
        
        return redirect('/cpost')->with('success','Post Removed');
    }
}
