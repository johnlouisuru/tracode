@extends('main.navcon')
@section('content')
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1><font color="red"><center>C#</center></font></h1>
  <a href="/cinheritance">Inheritance</a>
  <a href="/carray">Create An Array</a>
  <a href="/csql">Sql Server</a>
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
    <center><h1 style="margin-left: -80px;">Create an Array</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> T Arrays are used to store multiple values in a single variable,<br> instead of declaring separate variables for each value.

  <br>To declare an array, define the variable type with square brackets:</p></h4></center>

  <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h4 ><p style="font-family: Courier New"> 
string[] shirt;

//you now declared a variable that holds an array of strings.
      
/*To insert values to it, we can use an array literal - 
place the values in a comma-separated list, inside curly
braces:*/

string[] shirt = {"T-Shirt", "Sando", "Dress", "Top"};

//To create an array of integers, you could write:

int[] myNum = {1, 2, 3, 4};
</p>

  <form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>

</pre>
</div>
   
         </div>
    
@endsection