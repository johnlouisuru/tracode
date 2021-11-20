@extends('main.navcon')
@section('content')
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1><font color="red"><center>C#</center></font></h1>
  <a href="/cuserinput">User Input</a>
  <a href="/cnumberinput">Number Input</a>
  
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
      <center><h1>C# Intermediate Codes </h1></center>
      </div>
    <div class="card-body" style="background-color: #f5c4c4;">
  <center><h4 style="margin-top: 30px; ">You are now in the intermediate category where you will learn more advanced codes than the previous category that you have been encountered.
    Great Job!! Go and  learn alot in this part TraCoders!</h4></center>
  
      
    </div>
    </div>
    </div>
    </div>

    
 
  
@endsection