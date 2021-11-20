@extends('main.navcon')
@section('content')
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1><font color="red"><center>C#</center></font><font color="White"><center>Language</center></font></h1>
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

<div style="margin-left: 200px;">
    <center><h1 style="margin-left: -80px;">Java - What is OOP?</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> OOP stands for Object-Oriented Programming.</p></h4></center>
<div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
  <pre><h5 ><p style="font-family: Courier New"> 
    Procedural programming is about writing procedures or
    methods that perform operations on the data, 
    hile object-oriented programming is about 
    creating objects that contain both data and methods.
    
    Object-oriented programming has 
    several advantages over procedural programming:
    
    OOP is faster and easier to execute
    OOP provides a clear structure for the programs
    OOP helps to keep the Java code DRY "Don't Repeat Yourself"
    and makes the code easier to maintain, modify and debug
    OOP makes it possible to create full reusable applications 
    with less code and shorter development time.
</pre>
</p>
</h5>
</div>
    
@endsection