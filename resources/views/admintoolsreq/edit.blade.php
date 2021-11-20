@extends('admin.navad')
@section('contents')
<h1> Edit Required scores</h1>
{!! Form::open(['action'=>['App\Http\Controllers\LevelRequirementController@update',$phptabs->id],'method'=>'POST','class'=>'pull-right']) !!}
<div class="container">
    <div class="card p-3">
       <div class="form-group">
           {{Form::label('Languages','Select Languages ')}}
           {!! Form::select('Languages', array('PHP' => 'PHP', 'Java' => 'Java', 'Csharp'=>'Csharp'),$phptabs->Languages,['class'=>'form-select']); !!}
     </div>
   <div class="form-group">
       {{Form::label('Intermediate','Intermediate')}}
       {{Form::text('Intermediate',$phptabs->Intermediate,['class'=>'form-control','placeholder'=>'Enter Required Score']) }}
   </div>
   <div class="form-group">
       {{Form::label('Advanced','Advanced')}}
       {{Form::text('Advance',$phptabs->Advance,['class'=>'form-control','placeholder'=>'Enter Required Score']) }}
   </div>
   <div class="row">
       <div class="col">
        {{Form::hidden('_method', 'PUT')}}
   {{Form::submit('Submit',['class'=>'btn btn-primary','style'=>'width: 100px;'])}}
   <a href="/phpquizrequire" class="back float-sm-right">&#8641;</a>
       </div>
   </div>
{!! Form::close() !!}


</div>
</div>
@endsection