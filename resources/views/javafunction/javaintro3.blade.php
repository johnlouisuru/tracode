@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="green"><center>Java</center></font><font color="White"><center>Language</center></font></h1>
    <a href="/javacreatefile">File Creation</a>
    <a href="/javaOOP">Object Oriented Programming</a>
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

    <div style="z-index: 100;">
      <div class="card m-4 "style="background-color: #f59297;" >
        <div class="card-header">
        <center><h1>Java Advanced Codes</h1></center>
        </div>
      <div class="card-body" style="background-color: #f5c4c4;">
    <center><h4 style="margin-top: 30px; ">Good Luck!! You now made it to Advanced Level! In this stage, you will learn high-level codes, algorithm, deep problem-solving situations and lastly of course the database functions. Happy learning, TraCoder!</h4></center>
    
        
      </div>
      </div>
      </div>
      </div> 
    
      
    
@endsection