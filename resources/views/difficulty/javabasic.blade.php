@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
          <center><h1>Java Basic Post</h1></center>
          <a href="/javadiff" class="back">&#8592;</a>
        </div>
        <ul class="list-group">
            @if(count($javatabs)>0)
            @foreach ($javatabs as $jtab)
            <li class="list-group-item"><a href="/javapost/{{$jtab->id}}">{{$jtab->title}}</a>  <sub class="float-sm-right"> {{$jtab->category}}</sub></li>
            @endforeach
      
          @endif
        </ul>
      </div>
</div>
@endsection
       