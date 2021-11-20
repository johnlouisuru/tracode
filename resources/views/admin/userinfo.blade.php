@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
          <center><h1>User Info</h1></center>
        </div>
        <ul class="list-group">
           
           
            @if(count($users)>0)
            @foreach ($users as $uses)
            <li class="list-group-item"><a href="/userinfos/{{$uses->id}}">{{$uses->name}} <sub class="float-sm-right">{{$uses->email}}</sub>
            @endforeach
      
          @endif
        </ul>
      </div>
</div>
@endsection
       