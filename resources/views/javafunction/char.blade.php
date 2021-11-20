@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="green"><center>Java</center></font><font color="White"><center>Language</center></font></h1>
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

<div style="margin-left: 200px;">
    <center><h1 style="margin-left: -70px;">Char Function</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">The Java char keyword is a primitive data type.<br>
  It is used to declare the character-type variables and methods.<br>
   It is capable of holding the unsigned 16-bit Unicode characters.</p></h4></center>

   <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
 <pre><h4 ><p style="font-family: Courier New"> 
public class CharExample1 {  
 
           public static void main(String[] args) {  
         
               char char1='a';  
               char char2='A';  
                 
               System.out.println("char1: "+char1);  
               System.out.println("char2: "+char2);
           }         
       }   

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h4>
</pre>
</div>
    
 </div>
    
@endsection