@extends('admin.navad')
@section('contents')
 <h1>Create Post </h1>
 {!! Form::open(['action'=>'App\Http\Controllers\JavatabController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 <div class="container">
     <div class="card p-3">
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'title']) }}
    </div>
    <div class="form-group">
        {{Form::label('category','Category: ')}}
        {!! Form::select('category', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate', 'Advance'=>'Advance'),'Basic',['class'=>'form-select']); !!}
    </div>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textArea('body','',['class'=>'form-control','placeholder'=>'Body text']) }}
    </div>

    <div class="form-group">
        {{Form::label('Codes','Program Codes')}}
        {{Form::textArea('codes','',['class'=>'form-control','placeholder'=>'Your code here']) }}
    </div>
    <div class="form-group">
        {{csrf_field() }}
    
        {{Form::file('filename',['class'=>'form-control-file','name'=>'uploadedfile'])}}
        </div>
    <div class="row">
        <div class="col">
    {{Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width: 100px;'])}}
    <a href="/javadiff" class="back float-sm-right">&#8641;</a>
        </div>
    </div>
{!! Form::close() !!}

</div>
</div>

@endsection