<?php

namespace App\Http\Controllers;
use App\Models\csharp;
use Illuminate\Http\Request;
use App\Http\Controllers\MemberController;

class CsharpShowInfo extends Controller
{
    public function show($id)
    {
        $csharps=csharp::find($id);
        if($csharps->category == 'Advance'){
            if($csharps->filename != null){
                return view('csharpintrotry.csharpshowadvance')->with('csharps',$csharps);
            }
            else{

                if($csharps->codes != null){
                    return view('csharpintrotry.csharpshow')->with('csharps',$csharps);
                }
                else{
                    return view('csharpintrotry.csharpshowcode')->with('csharps',$csharps);
                }
                
            }
        }
      else{
        if($csharps->codes != null){
            return view('csharpintrotry.csharpshow')->with('csharps',$csharps);
        }
        else{
            return view('csharpintrotry.csharpshowcode')->with('csharps',$csharps);
        }
      }
    }

    public function create()
    {
        return view ('postc.create2');
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

        $csharps = new csharp();
        $csharps->title=$request->input('title');
        $csharps->body=$request->input('body');
        $csharps->category=$request->input('category');
        $csharps->codes=$request->input('codes');
        $csharps->save();
        return redirect('/cdiff')->with('success', 'New Learning Created');
    }

    public function edit($id)
    {
        $csharps=csharp::find($id);
        return view('postc.editimage')->with('csharps',$csharps);
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

        $csharps =csharp::find($id);
        $csharps->filename=$request->input('filename');

      
        $file = $request->file('uploadedfile');
        $csharps->filename = $file->getClientOriginalName();
        $csharps->filename = time(). '.' . $csharps->filename;
        $path = $file->storeAs('public', $csharps->filename);
        

     $csharps->save();
     $csharps = csharp::latest()->firstOrFail();
         return redirect('/cpost')->with('success','New Image Updated');
    }
}
