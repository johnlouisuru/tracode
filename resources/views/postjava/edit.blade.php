@extends('admin.navad')
@section('contents')
 <h1>Edit Post </h1>
 
 {!! Form::open(['action'=>['App\Http\Controllers\JavatabController@update',$javatabs->id],'method'=>'POST','class'=>'pull-right']) !!}
 <div class="container">
     <div class="card p-3">
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$javatabs->title,['class'=>'form-control','placeholder'=>'title']) }}
    </div>
    <div class="form-group">
        {{Form::label('category','Difficulty')}}
        {!! Form::select('category', array('Basic' => 'Basic', 'Intermediate' => 'Intermediate', 'Advance'=>'Advance'),$javatabs->category,['class'=>'form-select']); !!}
    </div>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textArea('body',$javatabs->body,['class'=>'form-control','placeholder'=>'Body text']) }}
    </div>

    <div class="form-group">
        {{Form::label('Codes','Program Codes')}}
        {{Form::textArea('codes',$javatabs->codes,['class'=>'form-control','placeholder'=>'Your code here']) }}
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