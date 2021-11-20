@extends('main.navcon')
@section('content')
<br>
<head>
  <title>Tracode</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="icon" href="/img/logo.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
  </head>
 
  <body style="background-color: #32bbc2">
<div class="container">

  <div style="z-index: 100;">
    <div class="card m-4 "style="background-color: transparent; border: none!important;" data-aos="fade-left" data-aos-duration="500">
      <div class="card-body" style="background-color: white; margin-top: 5%;border: 1px solid black; ">
        <h1 style="border-bottom: 1px solid black;">Intermediate C#</h1>
      <h4>In this catergory, we will discuss on how to use a much more complex syntax of code than the previous category has to offer.</h4>
      </div>
      <div class="card-body" data-aos="fade-left" data-aos-duration="1000">
        <ul class="list-group">
            @if(count($csharps)>0)
            @foreach ($csharps as $ctab)
            <li class="list-group-item" style="background-color: #ffbf00; border: none!important; border-radius: 0%; color: black;"><a href="/csharpguest/{{$ctab->id}}" style="color: black;">{{$ctab->title}}</a> <sup class="float-sm-right">{{$ctab->category}}</sup></li>
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
@endsection