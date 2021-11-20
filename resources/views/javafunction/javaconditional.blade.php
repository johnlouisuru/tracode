@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="green"><center>Java</center></font><font color="White"><center>Language</center></font></h1>
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
    <center><h1 style="margin-left: -70px;">Java If-else Function</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">Java has the following conditional statements:<br>

  Use if to specify a block of code to be executed, if a specified condition is true<br>
  Use else to specify a block of code to be executed, if the same condition is false</p></h4></center>

  <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h4 ><p style="font-family: Courier New"> 
public class Main {
          public static void main(String[] args) {
            if (15 > 13) {
              System.out.println("15 is greater than 13"); 
            }  
          }
        }
      
        public class Main {
          public static void main(String[] args) {
            int time = 15;
            if (time < 13) {
              System.out.println("Good day.");
            } else {
              System.out.println("Good evening.");
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