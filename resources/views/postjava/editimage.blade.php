@extends('admin.navad')
@section('contents')
 <h1>Edit Media Post </h1>
 
 {!! Form::open(['action'=>['App\Http\Controllers\JavaShowInfo@update',$javatabs->id],'method'=>'POST','class'=>'pull-right','enctype'=>'multipart/form-data']) !!}
 <div class="container">
     <div class="card p-3">
    <div class="form-group">
        {{Form::hidden('title','Title')}}
        {{Form::hidden('title',$javatabs->title,['class'=>'form-control','placeholder'=>'title']) }}
    </div>
    <div class="form-group">
        {{Form::hidden('category','Difficulty')}}
        {!! Form::hidden('category',$javatabs->category,['class'=>'form-select']); !!}
    </div>

    <div class="form-group">
        {{Form::hidden('body','Body')}}
        {{Form::hidden('body',$javatabs->body,['class'=>'form-control','placeholder'=>'Body text']) }}
    </div>
    <div class="form-group">
        {{csrf_field() }}
        {{Form::file('filename',['class'=>'form-control-file','name'=>'uploadedfile'])}}
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
</div>
</div>

@endsection