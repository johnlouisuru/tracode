<?php

namespace App\Http\Controllers;
use App\Models\javatab;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class JavatabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $javatabs = javatab::all();
        return view('postjava.index')->with('javatabs',$javatabs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('postjava.create');
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

        $javatabs = new javatab();
        $javatabs->title=$request->input('title');
        $javatabs->body=$request->input('body');
        $javatabs->category=$request->input('category');
        $javatabs->codes=$request->input('codes');

        $file = $request->file('uploadedfile');
        $javatabs->filename = $file->getClientOriginalName();
        $javatabs->filename = time(). '.' . $javatabs->filename;
        $path = $file->storeAs('public', $javatabs->filename);

        $javatabs->save();
     $javatabs = javatab::latest()->firstOrFail();
        return redirect('/javadiff')->with('success', 'New Learning Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $javatabs=javatab::find($id);
        if($javatabs->category =='Advance'){
            if($javatabs->filename != null){
                return view('postjava.showadvance')->with('javatabs',$javatabs);
            }
            else{
                return view('postjava.show')->with('javatabs',$javatabs);
            }
            
        }
        else{
            return view('postjava.show')->with('javatabs',$javatabs);
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
        $javatabs=javatab::find($id);
        return view('postjava.edit')->with('javatabs',$javatabs);
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

        $javatabs =javatab::find($id);
        $javatabs->title=$request->input('title');
        $javatabs->body=$request->input('body');
        $javatabs->category=$request->input('category');
        $javatabs->codes=$request->input('codes');
        $javatabs->save();

        return redirect('/javapost')->with('success','New Learning Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $javatabs=javatab::find($id);
        $javatabs->delete();
        
        return redirect('/javapost')->with('success','Post Removed');
    }
}
