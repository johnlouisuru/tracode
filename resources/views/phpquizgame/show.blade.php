@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
         
            <sub> Title</sub>
            <h1> {{$phpquizs->title}}</h1>
            <a onclick="goBack()" href="/phpquizgame" class="back">&#8592;</a>
          </div>
          <div class="bg-light">
          <div class="form-group">
          <label> Question </label>
            <h5>{{$phpquizs->question}}</h5>
            
        </div>
        
          <div class="form-group">
            <label> Keyword </label>
            <h3> {{$phpquizs->answerkey}}</h3>
          </div>
          <div class="form-group">
            <label> Keyword </label>
            <h3> {{$phpquizs->answerkey2}}</h3>
          </div>
          <div class="form-group">
            <label> Keyword </label>
            <h3> {{$phpquizs->answerkey3}}</h3>
          </div>
          

          <div class="form-group">
            <label> Trivia </label>
            <h3> {{$phpquizs->trivia}}</h3>
          </div>

        </div>
        <a href="/phpquizresource/{{$phpquizs->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action'=>['App\Http\Controllers\ControllerPhpquiz@destroy',$phpquizs->id],'method'=>'POST']) !!}
  {{Form::hidden('_method','DELETE')}}
  {{Form::submit('Delete',['class'=>'btn btn-danger','style'=>'width: 100%;'])}}
  {!! Form::close() !!} 
      </div>
</div>
<script>
    function goBack() {
      window.history.back();
    }
    </script>
@endsection
       