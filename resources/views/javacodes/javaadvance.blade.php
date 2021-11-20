@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="green"><center>Java</center></font><font color="White"><center>Language</center></font></h1>
    <a href="/javaadvance">String</a>
    <a href="#">Interger</a>
    <a href="#">Float</a>
    <a href="#">Boolean</a>
    <a href="#">Char</a>
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
    <center><h1 style="margin-left: -70px;">Java User Input Function</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "> The Scanner class is used to get user input, and it is found in the java.util package.
    <br> It creates an object of the c</h4></center>


    <div style="text-align: center; margin-top: 30px;"><h6><pre>
        import java.util.Scanner; // import the Scanner class 

        class Main {
          public static void main(String[] args) {
            Scanner myObj = new Scanner(System.in);
            String userName;
            
            // Enter username and press Enter
            System.out.println("Enter username"); 
            userName = myObj.nextLine();   
               
            System.out.println("Username is: " + userName);        
          }
        }</pre></h6></div>
    
        <div style="margin-top: 100px;" class="ml-1 ml-0 mx-auto">
          <div style="width: 90%; margin-left: 90px;" class="container row text-center">
           <div class="col-sm">
           <h4>Try Code Here</h4>
           </div>
           <div class="col-sm">
           <h4>Output</h4>
           </div>
         </div>
         <div style="height: 350px; width: 90%; margin-left: 90px;" class="container row">
              <div  style="height: 350px; width: 45%;10px; box-shadow: 3px 5px 10px 5px gray; margin-right: 10%; border-radius: 20px;"></div>
              <div style ="height: 350px; width: 45%; 10px; box-shadow: 3px 5px 10px 5px gray; border-radius: 20px;"></div>
         </div>
         </div>
         </div>
    
@endsection