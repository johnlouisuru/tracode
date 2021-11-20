@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
            <h1>{{$csharps->title}}</h1>
            <a onclick="goBack()" href="#" class="back">&#8592;</a>
        </div>
        <div class="bg-light">
          <pre>{{$csharps->body}}</pre>

          <h5> code inserted:</h5>
          <pre> {{$csharps->codes}}</pre>
        </div>
        <img style="display: none" onload="this.style.display=''" src="/storage/{{$csharps->filename}}" alt="" width="30%" height="20%"/>
        <a href="/cpost/{{$csharps->id}}/edit" class="btn btn-default">Edit</a>
        <a href="/csharpresource/{{$csharps->id}}/edit" class="btn btn-default">Edit Media</a>
        {!! Form::open(['action'=>['App\Http\Controllers\CtabController@destroy',$csharps->id],'method'=>'POST']) !!}
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
       