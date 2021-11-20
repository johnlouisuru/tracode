@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
         <center><h1> Php Advanced quiz Post</h1></center>
          <a href="/phpquizgame" class="back">&#8592;</a>
        </div>
        <ul class="list-group">
            @if(count($phpquizs)>0)
            @foreach ($phpquizs as $pquiz)
            <li class="list-group-item"><a href="/phpquizresource/{{$pquiz->id}}">{{$pquiz->title}}</a> <sup class="float-sm-right">{{$pquiz->category}}</sup></li>
            @endforeach
      
          @endif
        </ul>
      </div>
</div>

@endsection
       