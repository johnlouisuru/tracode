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
    <center><h1 style="margin-left: -80px;">Create a File</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> To create a file in Java, you can use the createNewFile() method. <br>
  This method returns a boolean value: true if the file was successfully created, <br>and false if the file already exists. <br>
  Note that the method is enclosed in a try...catch block. <br>This is necessary because it throws an IOException if an error occurs<br>
   (if the file cannot be created for some reason): </p></h4></center>

   <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h4 ><p style="font-family: Courier New"> 
import java.io.File; 
 // Import the File class
import java.io.IOException;  
// Import the IOException class to handle errors
      

      public class CreateFile {
        public static void main(String[] args) {
          try {
            File myObj = new File("filename.txt");
            if (myObj.createNewFile()) {
        System.out.println("File created:"+myObj.getName());
            } else {
            System.out.println("File already exists.");
            }
          } catch (IOException e) {
            System.out.println("An error occurred.");
            e.printStackTrace();
          }
        }
      }
</pre>
</p>
</h4>
</div>
         </div>
    
@endsection