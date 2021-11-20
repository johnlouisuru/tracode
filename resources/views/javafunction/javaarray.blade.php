@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>Java</center></font></h1>
    <a href="/javaarray">Array</a>
    <a href="/javaconditional">Conditionals</a>
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
    <center><h1 style="margin-left: -70px;">Java Arrays</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> Arrays are used to store multiple values in a single variable,<br>
  instead of declaring separate variables for each value.<br>

 To declare an array, define the variable type with square brackets:</p></h4></center>

 <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h4><p style=" font-family: Courier New"> 
String[] cars;

String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
To create an array of integers, you could write:

int[] myNum = {10, 20, 30, 40}; 

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>
</pre>
</div>

      
           </div>
    
@endsection