<?php

namespace App\Http\Controllers;

use App\Models\phptab;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;

class PhpShowIndex extends Controller
{

    public function show($id)
    {
       $phptabs=phptab::find($id);
       if($phptabs->category=='Advance'){
           if($phptabs->filename != null){
            return view('phpbasictry.showphpadvance')->with('phptabs',$phptabs);
           }
           else{
               if($phptabs->codes != null){
                return view('phpbasictry.showphpguest')->with('phptabs',$phptabs);
               }

               else{
                return view('phpbasictry.showphpguestcode')->with('phptabs',$phptabs);
               }
            
           }
       }
      else{
        if($phptabs->codes != null){
            return view('phpbasictry.showphpguest')->with('phptabs',$phptabs);
           }

           else{
            return view('phpbasictry.showphpguestcode')->with('phptabs',$phptabs);
           }
      }
    }

    public function create()
    {
        return view ('postphp.create2');
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
            'category'=>'required'
        ]);

        $phptabs = new phptab();
        $phptabs->title=$request->input('title');
        $phptabs->body=$request->input('body');
        $phptabs->category=$request->input('category');
        $phptabs->codes=$request->input('codes');
        $phptabs->save();
    return redirect('/phpdiff')->with('success', 'New Learning Created');
    }

    public function edit($id)
    {
        $phptabs=phptab::find($id);
        return view('postphp.editimage')->with('phptabs',$phptabs);
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
            'uploadedfile'=>'required',

        ]);

        $phptabs =phptab::find($id);
        $phptabs->filename=$request->input('filename');

      
        $file = $request->file('uploadedfile');
        $phptabs->filename = $file->getClientOriginalName();
        $phptabs->filename = time(). '.' . $phptabs->filename;
        $path = $file->storeAs('public', $phptabs->filename);

        $phptabs->save();
     $phptabs = phptab::latest()->firstOrFail();

         return redirect('/postphp')->with('success','New Image Updated');
    }
}
