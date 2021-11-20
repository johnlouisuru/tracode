@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>PHP</center></font></h1>
    <a href="/phpbasic2">echo</a>
    <a href="/phpvariable">Variable</a>
    <a href="/phpcomment">Comment</a>
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

<div class="container">

<div style="margin-left: 200px;">
    <center><h1 style="margin-left: -70px;">Variables Function</h1></center>
   
</div>

<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> In PHP, variables starts with the $ sign, followed by the name of the variable:</p></h4></center><br>

<center><div class="div3">
  <h5 style=""><p style="font-family: Courier New">< ?php
    $txt = "Hello world!";<br>
    $x = 5;<br>
    $y = 10.5;<br>
    ?></p></h5>
    </div>

        <div style="margin-top: 40px;" class="ml-1 ml-0 mx-auto">
          <div style="width: 90%; margin-left: 90px;" class="container row text-center">
           <div class="col-sm">
           <h4>Try Code Here</h4>
           </div>
           <div class="col-sm">
           <h4>Output</h4>
           </div>
         </div>
         <div style="height: 350px; width: 90%; margin-left: 90px;" class="container row">
              <div  style="height: 350px; width: 45%;10px; box-shadow: 3px 5px 10px 5px gray; margin-right: 10%; border-radius: 20px;"></div>
              <div style ="height: 350px; width: 45%; 10px; box-shadow: 3px 5px 10px 5px gray; border-radius: 20px;"></div>
         </div>
         </div>
         </div>
    
@endsection