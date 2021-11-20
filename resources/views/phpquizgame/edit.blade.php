@extends('admin.navad')
@section('contents')
 <h1>Edit Post </h1>
 
 {!! Form::open(['action'=>['App\Http\Controllers\ControllerPhpquiz@update',$phpquizs->id],'method'=>'POST','class'=>'pull-right']) !!}
 <div class="container">
     <div class="card p-3">
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$phpquizs->title,['class'=>'form-control','placeholder'=>'Enter your title']) }}
        </div>
        <div class="form-group">
            {{Form::label('category','Difficulty')}}
            {!! Form::select('category', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate', 'Advanced'=>'Advanced'),$phpquizs->category,['class'=>'form-select']); !!}
   </div>
    <div class="form-group">
        {{Form::label('Question','Question')}}
        {{Form::textArea('question',$phpquizs->question,['class'=>'form-control','placeholder'=>'Update Question']) }}
    </div>
    <div class="form-group">
        {{Form::label('Keyword','Keyword')}}
        {{Form::text('answerkey',$phpquizs->answerkey,['class'=>'form-control','placeholder'=>'Keyword']) }}
    </div>
    <div class="form-group">
{{Form::label('Keyword','Keyword')}}
{{Form::text('answerkey2',$phpquizs->answerkey2,['class'=>'form-control','placeholder'=>'Keyword']) }}
</div>
<div class="form-group">
{{Form::label('Keyword','Keyword')}}
{{Form::text('answerkey3',$phpquizs->answerkey3,['class'=>'form-control','placeholder'=>'Keyword']) }}
</div>
    <div class="form-group">
        {{Form::label('trivia','trivia')}}
        {{Form::textArea('trivia',$phpquizs->trivia,['class'=>'form-control','placeholder'=>'Place your trivia here']) }}
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