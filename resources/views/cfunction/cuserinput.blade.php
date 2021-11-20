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

<div style="margin-left: 200px;">
    <center><h1 style="margin-left: -80px;">Get User Input</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> You have already learned that Console.WriteLine() is used to output (print) values. Now we will use Console.ReadLine() to get user input.<br>
  In the following example, the user can input his or hers username, which is stored in the variable userName. Then we print the value of userName:<br>
  </p></h4></center>

  <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h4 ><p style="font-family: Courier New"> 
// Type your username and press enter<br>
Console.WriteLine("Enter username:");
      
/* Create a string variable and get user input 
from the keyboard and store it in the variable*/

string userName = Console.ReadLine();
      
/*Print the value of the variable (userName)
which will display the input value */

Console.WriteLine("Username is: " + userName);

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>
</pre>
</div>
        
    
@endsection