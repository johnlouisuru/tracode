@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
          <center><h1>Php Intermediate Post</h1></center>
          <a href="/phpdiff" class="back">&#8592;</a>
        </div>
        <ul class="list-group">
            @if(count($phptabs)>0)
            @foreach ($phptabs as $ptab)
            <li class="list-group-item"><a href="/postphp/{{$ptab->id}}">{{$ptab->title}}</a>  <sub class="float-sm-right"> {{$ptab->category}}</sub></li>
            @endforeach
          @endif
        </ul>
      </div>
</div> 
@endsection
       