<!DOCTYPE html>
<html lang="en">
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
    <body style="background-color: #90ebf0;">
        <div class="sidenav">
            <p> <a href="/phpintroguest" style="color: #ffbf00; text-decoration: none !important;">PHP</a></p>
            <a class="nav" href="/phpbasicguest">Basic Codes</a>
            <a class="nav" href="/phpinterguest">Intermediate Code</a>
            <a class="nav" href="/phpadvaguest">Advanced Code</a>
            <p> <a href="/javaintro" style="color: #ffbf00; text-decoration: none !important;">Java</a></p>
            <a class="nav" href="/javabasicguest">Basic Codes</a>
            <a class="nav" href="/javainterguest">Intermediate Code</a>
            <a class="nav" href="/javaadvaguest">Advanced Code</a>
            <p><a href="/cintro" style="color: #ffbf00; text-decoration: none !important;">C#</a></p>
            <a class="nav" href="/csharpbasicguest">Basic Codes</a>
            <a class="nav" href="/csharpinterguest">Intermediate Code</a>
            <a class="nav" href="/csharpadvaguest">Advanced Code</a>
        </div>
        <div id="try" class="topnav">
            <a href="/homepage"><img src="/storage/logonav1.png" width="200px" height="90px" style="float: left; margin-top: -1.5%; margin-left: 0.5%;"></a>
            <form action="/login"> <button class="logintry" style="margin-left:70%;"> <h5>Log In </h5></button></form>
        </div> 
    <div class="main front">
        <br><br>
        
        <div class="container">
            <div style="z-index: 100;margin-top:-10%">
                <div class="card m-4" style="background-color: transparent; border: none!important;" >
                  <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid black; ">
                    <center><h1>{{$javatabs->title}}</h1></center>
                </div>
                <div class="card-body bg-white" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; ">
                    <pre style=" border: none!important; border-radius: 0%; color: black;">{{$javatabs->body}}</pre>
                </div>
                
                <div style="margin-top: 3%;">
             <center> <img style="display: none" onload="this.style.display=''" src="/storage/{{$javatabs->filename}}" alt="" width="60%" height="mx-auto"/></center>
              <center><video width="600" controls><source src="/storage/{{$javatabs->filename}}"></video> </center>
            </div>
        </div>
    </div>
        </div>
    </div>
    </body>
    </html>