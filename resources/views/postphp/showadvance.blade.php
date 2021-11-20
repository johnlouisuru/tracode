@extends('admin.navad')
@section('contents')
<div class="container p-5">
    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
            <h1>{{$phptabs->title}}</h1>
            <a onclick="goBack()" href="#" class="back">&#8592;</a>
        </div>
        <div class="bg-light p-2 m-2">
          <pre>{{$phptabs->body}}</pre>
        </div>
       <img style="display: none" onload="this.style.display=''" src="/storage/{{$phptabs->filename}}" alt="" width="30%" height="20%">
       <video width="400" controls>
        <source src="/storage/{{$phptabs->filename}}">
      </video>
        <a href="/postphp/{{$phptabs->id}}/edit" class="btn btn-default">Edit</a>
        <a href="/phpbasictrylang/{{$phptabs->id}}/edit" class="btn btn-default">Edit File</a>
  {!! Form::open(['action'=>['App\Http\Controllers\PhptabController@destroy',$phptabs->id],'method'=>'POST']) !!}
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
       