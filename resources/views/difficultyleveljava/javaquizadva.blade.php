
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
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    </head>

    <x-slot name="header">
  
      <nav class="font-semibold text-xl text-gray-800">
          {{ __('Java Quiz') }}
       
        <div class="float-right">
          Java Score: {{Auth::user()->javascore}}
            </div>
      </nav>
  </x-slot>

  <body style="background-color: #32bbc2;">
    <div class="container">

      <div style="z-index: 100; margin-top: 5%;">
        <div class="card m-4 "style="background-color: transparent; border: none!important;" data-aos="fade-left" data-aos-duration="500">
          <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid black; ">
        <center><h1>Advanced Level</h1></center>
      </div>
      <div class="card-body" data-aos="fade-left" data-aos-duration="1000">
        <ul class="list-group">
      @forelse ($javaquizs as $quiz)
            <li class="list-group-item" style="background-color: white; border: none!important; border-radius: 0%; color: black;">
              <a href="/javaquizgetadva/{{$quiz->id}}" style="color: black;">{{$quiz->title}}</a>
             
             <sub class="float-sm-right">@if($quiz->users->contains(Auth::user()->id)) answered</sub> @endif
            </li> 
        @empty
        <li class="list-group-item" style="background-color: #343a40; border: none!important; border-radius: 0%; color: white;">There is no available quiz at the moment</li>
        @endforelse
          </ul>
      </div>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
  </script>
  
</body>
</x-app-layout>