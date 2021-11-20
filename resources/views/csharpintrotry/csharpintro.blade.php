
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
    <x-nav-link :href="route('csharpadvancetry.csharpadvance')" :active="request()->routeIs('csharpadvancetry.csharpadvance')">
      {{ __('Advanced') }}
  </x-nav-link>
    </h2>
      
  </x-slot>

  <body style="background-color: #32bbc2">
    <div class="container">
      
      <div style="z-index: 100; margin-top: 5%;">
        <div class="card m-4 "style="background-color: transparent; border: none!important;" data-aos="fade-left" data-aos-duration="500">
      <div class="card-body" style="background-color: white; margin-top: 5%;border: 1px solid black; margin-top: 10%; box-shadow: 5px 5px 8px 1px #616161;">
      <h1>C#</h1>
            </div>
            <div class="card-body" style="background-color: #ffbf00; border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; box-shadow: 5px 5px 8px 1px #616161;">
              <h4 style="color:black;">Welcome TraCoder to the beginning category, here you will learn about the basics and the simplest codes for you to be able to master this language step by step, Happy Learning!</h4>
        
            
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