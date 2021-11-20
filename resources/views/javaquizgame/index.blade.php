@extends('admin.navad')
@section('contents')
<div class="container p-5">

    <div class="card"  style="background-color: #f59297;">
        <div class="card-header">
         <center><h1> Java quiz Post</h1></center>
          <a href="/cdiff" class="back">&#8592;</a>
        </div>
        <ul class="list-group">
            @if(count($javaquizs)>0)
            @foreach ($javaquizs as $jquiz)
            <li class="list-group-item"><a href="/javaquizresource/{{$jquiz->id}}">{{$jquiz->title}}</a> <sup class="float-sm-right">{{$jquiz->category}}</sup></li>
            @endforeach
      
          @endif
        </ul>
      </div>
</div>

@endsection
       