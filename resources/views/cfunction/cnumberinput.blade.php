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
    <center><h1 style="margin-left: -80px;">Get User Input and Numbers</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> The Console.ReadLine() method returns a string. Therefore, you cannot get information from another data type, such as int. For you, you just learned from the previous chapter (Type Casting), that you can convert any type explicitly, by using one of the Convert.To methods:
</p></h4></center>
<div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h6 ><p style="font-family: Courier New"> 
Example<br>
    Console.WriteLine("Enter your age:");
    int age = Convert.ToInt32(Console.ReadLine());
    Console.WriteLine("Your age is: " + age);
    *The if Statement
    Use the if statement to specify a block of 
    C# code to be executed if a condition is True.*/
    
    if (condition) 
    {
    // block of code to be executed if the condition is True
    }
    
    /*The else Statement
    Use the else statement to specify a block of 
    code to be executed if the condition is False.*/
    
    if (condition)
    {
      // block of code to be executed if the condition is True
     
    else 
    {
     // block of code to be executed if the condition is False
    }
    
    /*The else if Statement
    Use the else if statement to specify a 
    new condition if the first condition is False.*/
    
    Syntax
    if (condition1)
    {
     // block of code to be executed if condition1 is True
    } 
    else if (condition2) 
    {
     /* block of code to be executed if the
    condition1 is false and condition2 is True*/
    } 
    else
    {
    /*block of code to be executed if the 
    condition1 is false and condition2 is False*/
    }
    

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h6>
</pre>
</div>
    
@endsection