@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>PHP</center></font></h1>
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
    <center><h1 style="margin-left: -70px;">Connection to databases in PHP </h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">Before we can access data in the database, we need to be able to connect to the server:</p></h4></center>


<div class="d-flex div4" style="margin-left: 11%; border-radius: 20px;">
  <pre>
    <h4><p style="font-family: Courier New"> 
  < ?php
    < ?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    
    $conn = new mysqli($servername, $username, $password);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
  </pre>
    </h4>
  </div>
    
    
@endsection