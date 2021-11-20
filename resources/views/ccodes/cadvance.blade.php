@extends('main.navcon')
@section('content')
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1><font color="red"><center>C#</center></font><font color="White"><center>Language</center></font></h1>
  <a href="/cinheritance">Inheritance</a>
  <a href="/csql">SQL</a>
  <a href="/carray">Array</a>
  
</div>

<span style="font-size:30px;cursor:pointer; padding: 20px;" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<center><h1 style="margin-left:  100px;">C#</h1></center>

<center><h4 style="margin-top: 30px; ">Congratulations! You made it to Advanced Level! In this stage, <br> 
  you will learn high-level codes, algorithm, deep problem-solving situations and lastly Database functions. <br>
   Happy learning, TraCoder!</h4></center>

<br>
<center><h2 style="margin-top:20px;"> Why Learn C#</h2></center>
    <center><h4 style="margin-top:20px;"> Modern And Easy </h4></center>
    <center><h5 style="margin-top:20px;"> To develop C#, Microsoft has only an aim to developers <br> can learn easily and can support modern functionality.</h5></center>
    <center><h4 style="margin-top:20px;"> Fast And Open Source</h4></center>
    <center><h5 style="margin-top:20px;"> C# language lead by Microsoft instead of this there open source project <br> and tools are available on GitHub <br> and that’s why c# is growing fast just because of open source, </h5></center>
    <center><h4 style="margin-top:20px;"> Evolution Of C# Programming Language.</h4></center>
    <center><h5 style="margin-top:20px;"> Microsoft had built this language earlier only for windows application but after that,<br> however, we have begun to use this language for the console,<br> android, and ios, besides, C# started to be used with machine learning software.</h5></center>
    
    
 
  
@endsection