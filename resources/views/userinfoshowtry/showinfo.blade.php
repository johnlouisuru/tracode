@extends('admin.navad')
@section('contents')
<div class="container p-5">
    <div class="card" style="background-color: #f59297;">
        <div class="card-header">
            <h1>{{$users->name}}</h1>
            <a onclick="goBack()" href="#" class="back">&#8592;</a>
        </div>
        <div class="bg-light p-2 m-2">
           
        <h3><b>Email:</b> {{$users->email}}</h3>
        <h3><b> created at:</b> {{$users->created_at}}</h3>
        <h3><b> Verified at:</b>{{$users->email_verified_at}}</h3>
            
        </div>
        {!! Form::open(['action'=>['App\Http\Controllers\UserInfo@destroy',$users->id],'method'=>'POST']) !!}
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
       