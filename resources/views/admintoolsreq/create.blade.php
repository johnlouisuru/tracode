@extends('admin.navad')
@section('contents')
 <h1>Required scores</h1>
 {!! Form::open(['action'=>'App\Http\Controllers\LevelRequirementController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 <div class="container">
     <div class="card p-3">
        <div class="form-group">
            {{Form::label('Languages','Select Languages ')}}
            {!! Form::select('Languages', array('PHP' => 'PHP', 'Java' => 'Java', 'Csharp'=>'Csharp'),'Basic',['class'=>'form-select']); !!}
      </div>
    <div class="form-group">
        {{Form::label('Intermediate','Intermediate')}}
        {{Form::text('Intermediate','',['class'=>'form-control','placeholder'=>'Enter Required Score']) }}
    </div>
    <div class="form-group">
        {{Form::label('Advanced','Advanced')}}
        {{Form::text('Advance','',['class'=>'form-control','placeholder'=>'Enter Required Score']) }}
    </div>
    <div class="row">
        <div class="col">
    {{Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width: 100px;'])}}
    <a onclick="history.back()" href="#" class="back float-sm-right">&#8641;</a>
        </div>
    </div>
{!! Form::close() !!}


</div>
</div>
@endsection