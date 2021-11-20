
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
   
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <x-nav-link :href="route('csharpintrotry.csharpintro')" :active="request()->routeIs('csharpintrotry.csharpintro')">
          {{ __('Introduction') }}
      </x-nav-link>
      <x-nav-link :href="route('csharpbasictry.csharpbasic')" :active="request()->routeIs('csharpbasictry.csharpbasic')">
          {{ __('Basic') }}
      </x-nav-link>
      <x-nav-link :href="route('csharpintermediatetry.csharpintermediate')" :active="request()->routeIs('csharpintermediatetry.csharpintermediate')">
        {{ __('Intermediate') }}
    </x-nav-link>
    <x-nav-link :href="route('csharpadvancetry.csharpadvance')" :active="request()->routeIs('javaadvancetry.javaadvance')">
      {{ __('Advanced') }}
  </x-nav-link>
    </h2>
      
  </x-slot>

  <body style="background-color: #32bbc2">
    <div class="container">

      <div style="z-index: 100; margin-top: 5%;">
       <div class="card m-4 "style="background-color: transparent; border: none!important;" data-aos="fade-left" data-aos-duration="500">
          <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid white; ">
          <h1 style="border-bottom: 1px solid white;">Intermediate C#</h1>
        <h4>In this catergory, we will discuss on how to use a much more complex syntax of code than the previous category has to offer</h4>
        </div>
        <div class="card-body" data-aos="fade-left" data-aos-duration="1000">
        <ul class="list-group">
            @if(count($csharps)>0)
            @foreach ($csharps as $ctab)
            <li class="list-group-item" style="background-color: white; border: none!important; border-radius: 0%; color: black;"><a href="/csharpresource/{{$ctab->id}}" style="color: black;">{{$ctab->title}}</a> <sup class="float-sm-right">{{$ctab->category}}</sup></li>
            @endforeach
          @endif
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