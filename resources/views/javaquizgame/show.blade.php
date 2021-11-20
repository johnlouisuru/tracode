@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
         
            <sup> Title</sup>
            <h5> {{$javaquizs->title}}</h5>
            <a onclick="goBack()" href="/javaquizgame" class="back">&#8592;</a>
          </div>
          <div class="bg-light">
          <div class="form-group">
          <label> Question </label>
            <h1>{{$javaquizs->question}}</h1>
           
        </div>
     
         
          <div class="form-group">
            <label> Keyword </label>
            <h3> {{$javaquizs->answerkey}}</h3>
          </div>
          <div class="form-group">
            <label> Keyword </label>
            <h3> {{$javaquizs->answerkey2}}</h3>
          </div>
          <div class="form-group">
            <label> Keyword </label>
            <h3> {{$javaquizs->answerkey3}}</h3>
          </div>

          <div class="form-group">
            <label> Trivia </label>
            <h3> {{$javaquizs->trivia}}</h3>
          </div>

        </div>
        <a href="/javaquizresource/{{$javaquizs->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action'=>['App\Http\Controllers\ControllerJavaquiz@destroy',$javaquizs->id],'method'=>'POST']) !!}
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
       