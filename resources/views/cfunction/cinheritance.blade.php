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
    <center><h1 style="margin-left: -80px;">Inheritance (Derived and Base Class)</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS"> In C#, it is possible to inherit fields and methods from one class to another

  Derived Class (child) - the class that inherits from another class<br>
  Base Class (parent) - the class being inherited from<br>
  To inherit from a class, use the : symbol.<br>
  
  In the example below, the Car class (child) inherits the fields and methods from the Vehicle class (parent):<br>
  
 </p></h4></center>

 <div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
<pre><h6 ><p style="font-family: Courier New"> 
Example
      class Vehicle  // base class (parent) 
      {
        public string brand = "Ford";  // Vehicle field
        public void honk()             // Vehicle method 
        {                   
          Console.WriteLine("Tuut, tuut!");<br>
        }
      }
      
      class Car : Vehicle  // derived class (child)<br>
      {
        public string modelName = "Mustang";  // Car field<br>
      }
      
      class Program<br>
      {
        static void Main(string[] args)
        {
          // Create a myCar object
          Car myCar = new Car();
         
          // Call the honk() method (From the Vehicle class) on the myCar object
          myCar.honk();
          
          // Display the value of the brand field (from the Vehicle class) 
          // and the value of the modelName from the Car class
          Console.WriteLine(myCar.brand + " " + myCar.modelName);
           }
            }

</p>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
</h6>
</pre>
</div>

         </div>
    
@endsection