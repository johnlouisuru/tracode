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

  <div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>C#</center></font></h1>
    <a href="/cwriteline">WriteLine</a>
    <a href="/cvariable">Variable</a>
    <a href="/cdata">Data Types</a>
  </div>

  <body style="background-color: #32bbc2">
<div class="container" data-aos="fade-left" data-aos-duration="500">

  <div style="z-index: 100;">
    <div class="card m-4 "style="background-color: transparent; border: none!important;">
      <div class="card-body" style="background-color: white; border: 1px solid black;margin-top: 10%; box-shadow: 5px 5px 8px 1px #616161;">
      <h1>C#</h1>
      </div>
    <div class="card-body" style="background-color: #ffbf00; border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; box-shadow: 5px 5px 8px 1px #616161;">
  <h4>Welcome TraCoder to the beginning category, here you will learn about the basics and the simplest codes for you to be able to master this language step by step, Happy Learning!</h4>
  
      
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