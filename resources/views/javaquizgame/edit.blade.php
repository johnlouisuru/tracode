@extends('admin.navad')
@section('contents')
 <h1>Edit Post </h1>
 
 {!! Form::open(['action'=>['App\Http\Controllers\ControllerJavaquiz@update',$javaquizs->id],'method'=>'POST','class'=>'pull-right']) !!}
 <div class="container">
     <div class="card p-3">
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$javaquizs->title,['class'=>'form-control','placeholder'=>'Enter your title']) }}
        </div>
        <div class="form-group">
            {{Form::label('category','Difficulty')}}
            {!! Form::select('category', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate', 'Advanced'=>'Advanced'),$javaquizs->category,['class'=>'form-select']); !!}
  </div>
    <div class="form-group">
        {{Form::label('Question','Question')}}
        {{Form::textArea('question',$javaquizs->question,['class'=>'form-control','placeholder'=>'Update Question']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey',$javaquizs->answerkey,['class'=>'form-control','placeholder'=>'Your Keyword']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey2',$javaquizs->answerkey2,['class'=>'form-control','placeholder'=>'Your Keyword']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey3',$javaquizs->answerkey3,['class'=>'form-control','placeholder'=>'Your Keyword']) }}
    </div>
    <div class="form-group">
        {{Form::label('trivia','trivia')}}
        {{Form::textArea('trivia',$javaquizs->trivia,['class'=>'form-control','placeholder'=>'Place your trivia here']) }}
    </div>
    <div class="row">
        <div class="col">
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit',['class'=>'btn-primary','style'=>'width: 100px;'])}}
{!! Form::close() !!}

<a onclick="goBack()" href="#" class="back float-sm-right">	&#8594;</a>
        </div>
    </div>
<script>
    function goBack() {
      window.history.back();
    }
    </script>

@endsection