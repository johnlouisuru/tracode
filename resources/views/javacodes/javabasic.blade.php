@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>Java</center></font></h1>
    <a href="/javabasic">String</a>
    <a href="/javaint">Interger</a>
    <a href="/javafloat">Float</a>
    <a href="/javabool">Boolean</a>
    <a href="/javachar">Char</a>
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
    <center><h1 style="margin-left: -20%;">String Function</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">  In Java, string is basically an object that represents sequence of char values.</p></h4></center>

<div class ="d-flex justify-content-center div4" style="padding-bottom:-10%; margin-left: 10%; border-radius: 20px;">
  <pre><h4 ><p style="font-family: Courier New"> 
class Main {
      public static void main(String[] args) {
          
        String first = "Java";
         String second = "Python";
        String third = "JavaScript";
      
         System.out.println(first);   
         System.out.println(second);  
        System.out.println(third);  
      }
    } 

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>

</pre>
</div>

       </div>
    
@endsection