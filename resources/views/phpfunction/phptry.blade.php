@extends('admin.navad')
@section('contents')
<div class="container">

  <div style="z-index: 100; margin-top: 15%;">
    <div class="card m-4" style="background-color: white; border: none!important;">
      <div class="card-body" style=" background-color: white; border: none!important;">

        <h1>{{$phptabs->title}}</h1>
        
    </div>
    <div class="card-body" style="background-color: #1A1B1D;">
      <pre>{{$phptabs->body}}</pre>
    </div>
</div>
@endsection