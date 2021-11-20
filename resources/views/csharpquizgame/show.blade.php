@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
         
            <sup> title</sup>
            <h2>{{$csharpquizs->title}}</h2>
            <a onclick="goBack()" href="/csharpquizgame" class="back">&#8592;</a>
          </div>
          <div class="bg-light">
          <div class="form-group">
          <sub> Question </sub>
            <h1>{{$csharpquizs->question}}</h1>
           
        </div>
          <div class="form-group">
            <sup> Keyword </sup>
            <h3> {{$csharpquizs->answerkey}}</h3>
          </div>
          <div class="form-group">
            <sup> Keyword </sup>
            <h3> {{$csharpquizs->answerkey2}}</h3>
          </div>
          <div class="form-group">
            <sup> Keyword </sup>
            <h3> {{$csharpquizs->answerkey3}}</h3>
          </div>

          <div class="form-group">
            <sup> Trivia </sup>
            <h3> {{$csharpquizs->trivia}}</h3>
          </div>

        </div>
        <a href="/csharpquizresource/{{$csharpquizs->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action'=>['App\Http\Controllers\ControllerCsharpquiz@destroy',$csharpquizs->id],'method'=>'POST']) !!}
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
       