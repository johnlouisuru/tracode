@extends('main.navcon')
@section('content')
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1><font color="red"><center>C#</center></font></h1>
  <a href="/cwriteline">WriteLine</a>
  <a href="/cvariable">Variable</a>
  <a href="/cdata">Data Types</a>
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
    <center><h1 style="margin-left: -80px;">Initializing Variable</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> Variables are initialized (assigned a value) 
  with an equal sign followed by a constant expression. The general form of initialization is −
  variable_name = value;</p></h4></center>

  <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h4 ><p style="font-family: Courier New"> 
using System;<br>

      namespace VariableDefinition 
      {
        class Program {
          static void Main(string[] args)
          {<br>
            short a;
            
            int b ;
            
            double c;
            
            a = 10;
            
            b = 20;
            
            c = a + b;
            
    Console.WriteLine("a = {0}, b = {1}, c = {2}", a, b, c);
            
            Console.ReadLine();
            
         }
      }
    }

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>
</pre>
</div>
         </div>
    
@endsection