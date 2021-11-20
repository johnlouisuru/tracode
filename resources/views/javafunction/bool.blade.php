@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>Java</center></font></h1>
    <a href="/javabasic">String</a>
    <a href="/javaint">Integer</a>
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

<div>
    <center><h1 style="margin-left: 50px;">Boolean Function</h1></center>
   
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">Java has a boolean data type, which can take the values true or false.</p></h4></center>

<div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
  <pre><h4 ><p style="font-family: Courier New"> 
public class FloatExample1 {  
 
     public class Main {
            public static void main(String[] args) {
              boolean isJavaFun = true;
              boolean isNotFun = false;    
              System.out.println(isJavaFun);
              System.out.println(isNotFun);
            }
          } 

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>
</pre>
</div>
    
           </div>
    
@endsection