@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
          <center><h1>C# Basic Post</h1></center>
          <a href="/cdiff" class="back">&#8592;</a>
        </div>
        <ul class="list-group">
            @if(count($csharps)>0)
            @foreach ($csharps as $ctab)
            <li class="list-group-item"><a href="/cpost/{{$ctab->id}}">{{$ctab->title}}</a>  <sub class="float-sm-right"> {{$ctab->category}}</sub></li>
            @endforeach
      
          @endif
        </ul>
      </div>
</div>
@endsection