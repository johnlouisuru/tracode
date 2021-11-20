@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
         
            <sub> Title</sub>
            <h1> {{$phptabs->Languages}}</h1>
            <a onclick="goBack()" href="#" class="back">&#8592;</a>
          </div>
          <div class="bg-light">
          <div class="form-group">
          <label> Intermediate Requrements</label>
            <h5>{{$phptabs->Intermediate}}</h5>
            
        </div>
        
          <div class="form-group">
            <label> Advanced Requiremnets </label>
            <h5> {{$phptabs->Advance}}</h5>
          </div>
          
        </div>
        <a href="/reqscores/{{$phptabs->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action'=>['App\Http\Controllers\LevelRequirementController@destroy',$phptabs->id],'method'=>'POST']) !!}
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
       