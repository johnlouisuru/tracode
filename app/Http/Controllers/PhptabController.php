<?php

namespace App\Http\Controllers;
use App\Models\phptab;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class PhptabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $phptabs = phptab::all();
        return view('postphp.indexphp')->with('phptabs',$phptabs);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('postphp.create');
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

        $phptabs = new phptab();
        $phptabs->title=$request->input('title');
        $phptabs->body=$request->input('body');
        $phptabs->category=$request->input('category');
        $phptabs->filename=$request->input('filename');
        $phptabs->codes=$request->input('codes');

        $file = $request->file('uploadedfile');
        $phptabs->filename = $file->getClientOriginalName();
        $phptabs->filename = time(). '.' . $phptabs->filename;
        $path = $file->storeAs('public', $phptabs->filename);

        $phptabs->save();
     $phptabs = phptab::latest()->firstOrFail();
        return redirect('/phpdiff')->with('success', 'New Learning Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $phptabs=phptab::find($id);
       if($phptabs->category =='Advance'){
       if($phptabs->filename != null){
        return view('postphp.showadvance')->with('phptabs',$phptabs);
        
       }
       else{
        return view('postphp.showphp')->with('phptabs',$phptabs);
       }
    }
    else{
        return view('postphp.showphp')->with('phptabs',$phptabs);
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
        $phptabs=phptab::find($id);
        return view('postphp.edit')->with('phptabs',$phptabs);
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

        $phptabs =phptab::find($id);
        $phptabs->title=$request->input('title');
        $phptabs->body=$request->input('body');
        $phptabs->category=$request->input('category');
        $phptabs->codes=$request->input('codes');
        $phptabs->save();

         return redirect('/postphp')->with('success','New Learning Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phptabs=phptab::find($id);
        $phptabs->delete();
        
        return redirect('/postphp')->with('success','Post Removed');
    }
}
