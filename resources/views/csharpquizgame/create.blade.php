@extends('admin.navad')
@section('contents')
 <h1>Create Quiz Post </h1>
 {!! Form::open(['action'=>'App\Http\Controllers\ControllerCsharpquiz@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 <div class="container">
     <div class="card p-3">
        <div class="form-group">
            {{Form::label('Title','title')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter your title']) }}
        </div>
        <div class="form-group">
            {{Form::label('category','Category: ')}}
            {!! Form::select('category', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate', 'Advanced'=>'Advanced'),'Basic',['class'=>'form-select']); !!}
    </div>
    <div class="form-group">
        {{Form::label('question','Question')}}
        {{Form::textArea('question','',['class'=>'form-control','placeholder'=>'Place your question here']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey','',['class'=>'form-control','placeholder'=>'Your Keyword']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey2','',['class'=>'form-control','placeholder'=>'Your Keyword']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey3','',['class'=>'form-control','placeholder'=>'Your Keyword']) }}
    </div>
    <div class="form-group">
        {{Form::label('trivia','trivia')}}
        {{Form::textArea('trivia','',['class'=>'form-control','placeholder'=>'Place your trivia here']) }}
    </div>
    <div class="row">
        <div class="col">
    {{Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width: 100px;'])}}
    <a href="/csharpquizgame" class="back float-sm-right">&#8641;</a>
        </div>
    </div>
{!! Form::close() !!}

</div>
</div>

@endsection