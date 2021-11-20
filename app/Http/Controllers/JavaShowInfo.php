<?php

namespace App\Http\Controllers;
use App\Models\javatab;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class JavaShowInfo extends Controller
{
    public function show($id) {
        $javatabs=javatab::find($id);
        if($javatabs->category =='Advance'){
            if($javatabs->filename != null){
                return view('javaintroguesttry.javaguestshowadvance')->with('javatabs',$javatabs);
            }
            else{
                if($javatabs->codes){
                    return view('javaintroguesttry.javaguestshow')->with('javatabs',$javatabs);  
                }
                else{
                    return view('javaintroguesttry.javaguestshowcode')->with('javatabs',$javatabs);
                }
                
            }
        }
      else{
        if($javatabs->codes){
            return view('javaintroguesttry.javaguestshow')->with('javatabs',$javatabs);  
        }
        else{
            return view('javaintroguesttry.javaguestshowcode')->with('javatabs',$javatabs);
        }
      }
    }

    public function create()
    {
        return view ('postjava.create2');
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
        ]);

        $javatabs = new javatab();
        $javatabs->title=$request->input('title');
        $javatabs->body=$request->input('body');
        $javatabs->category=$request->input('category');
        $javatabs->codes=$request->input('codes');
        $javatabs->save();
        return redirect('/javadiff')->with('success', 'New Learning Created');
    }
    public function edit($id)
    {
        $javatabs=javatab::find($id);
        return view('postjava.editimage')->with('javatabs',$javatabs);
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

        $javatabs =javatab::find($id);
        $javatabs->filename=$request->input('filename');

      
        $file = $request->file('uploadedfile');
        $javatabs->filename = $file->getClientOriginalName();
        $javatabs->filename = time(). '.' . $javatabs->filename;
        $path = $file->storeAs('public', $javatabs->filename);

        $javatabs->save();
     $javatabs = javatab::latest()->firstOrFail();
         return redirect('/javapost')->with('success','New Image Updated');
    }
}
