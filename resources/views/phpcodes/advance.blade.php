@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <<h1><font color="red"><center>PHP</center></font></h1>
    <a href="/phpadvance2">MySQL </a>
    <a href="/phpconnection">Connection</a>
    <a href="/phpinserting">Inserting</a>
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
    <center><h1 style="margin-left: -70px;">MySQL Database </h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> MySQL is the most popular database system used with PHP.</p></h4></center>

<div class ="d-flex justify-content-center div4" style="padding-bottom:-10%; margin-left: 15%; border-radius: 20px;">
  <pre><h4 ><p style="font-family: Courier New"> 
What is MySQL?<br>
MySQL is a database system used on the web<br>
MySQL is a database system that runs on a server<br>
MySQL is ideal for both small and large applications<br>
MySQL is very fast, reliable, and easy to use<br>
MySQL uses standard SQL<br>
MySQL compiles on a number of platforms<br>
MySQL is free to download and use
</pre>
</p>
</h4>
    
@endsection
