<x-app-layout x-data="{ open: false }">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="/css/navreg.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="icon" href="/img/logo.png" type="image/png" sizes="16x16">
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
      <script src="{{url('js/jquery-linedtextarea.js')}}"></script>
      <link href="{{url('css/jquery-linedtextarea.css')}}" type="text/css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="/img/logo.png" type="image/png" sizes="16x16">
      <style>
          body { background-color: #fafafa; }
          .container { margin: 150px auto; max-width: 960px; }
        </style>
      </head>
 
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <x-nav-link :href="route('javaintroguesttry.javaintroguest')" :active="request()->routeIs('javaintroguesttry.javaintroguest')">
          {{ __('Introduction') }}
      </x-nav-link>
      <x-nav-link :href="route('javabasictry.javabasic')" :active="request()->routeIs('javabasictry.javabasic')">
          {{ __('Basic') }}
      </x-nav-link>
      <x-nav-link :href="route('javaintermediatetry.javaintermediate')" :active="request()->routeIs('javaintermediatetry.javaintermediate')">
        {{ __('Intermediate') }}
    </x-nav-link>
    <x-nav-link :href="route('javaadvancetry.javaadvance')" :active="request()->routeIs('javaadvancetry.javaadvance')">
      {{ __('Advanced') }}
  </x-nav-link>
    </h2>
    </x-slot>
    <body style="background-color: #90ebf0">
      <div class="container">
        <div style="z-index: 100;margin-top: -13%;">
        <div class="card m-4" style="background-color: transparent; border: none!important;">
          <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid black; ">
        <center><h1>{{$javatabs->title}}</h1></center>
    </div>
    <div class="card-body bg-white" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; ">
      <pre style=" text-align: left; border: none!important; border-radius: 0%; color: black;">{{$javatabs->body}}</pre>
    </div>
    <div style="margin-top: 3%">
    <center><img style="display: none" onload="this.style.display=''" src="/storage/{{$javatabs->filename}}" alt="" width="60%" height="mx-auto"/></center>
   <center> <video width="600" controls><source src="/storage/{{$javatabs->filename}}"></video></center>
</div>
      </div>
        </div>
      </div>

</body>
</x-app-layout>