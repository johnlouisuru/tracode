
<x-app-layout x-data="{ open: false }">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/navreg.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <x-slot name="header">
  
      <nav class="font-semibold text-xl text-gray-800">
          {{ __('Php Quiz') }}
       
        <div class="float-right">
          PHP Score: {{Auth::user()->phpscore}}
            </div>
      </nav>
  </x-slot>

  <body>
    <div class="container">

      <div style="z-index: 100; margin-top: 5%;">
        <div class="card m-4" style="background-color: white; border: none!important;">
          <div class="card-body" style=" background-color: white; border: none!important;">
        <center><h1>{{$category}}Level</h1></center>
      </div>
      <ul class="list-group">
          @if(count($phpquizs)>0)
          @foreach ($phpquizs as $ptab)
          <li class="list-group-item" style="background-color: #343a40; border: none!important; border-radius: 0%; color: white;"><a href="/phpquizget/{{$ptab->id}}" style="color: white;">{{$ptab->title}}</a>  <sub class="float-sm-right">point gain: {{$ptab->point}}</sub></li>
          @endforeach
    
        @endif
      </ul>
    </div>
</body>
</x-app-layout>