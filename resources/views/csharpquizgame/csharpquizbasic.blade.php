@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
         <center><h1> Csharp Basic quiz Post</h1></center>
          <a href="/csharpquizgame" class="back">&#8592;</a>
        </div>
        <ul class="list-group">
            @if(count($csharpquizs)>0)
            @foreach ($csharpquizs as $cquiz)
            <li class="list-group-item"><a href="/csharpquizresource/{{$cquiz->id}}">{{$cquiz->title}}</a> <sup class="float-sm-right">{{$cquiz->category}}</sup></li>
            @endforeach
      
          @endif
        </ul>
      </div>
</div>

@endsection
       