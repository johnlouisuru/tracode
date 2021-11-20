@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>PHP</center></font></h1>
    <a href="/phpintermediate2">Globals</a>
    <a href="/phpconstruct">Construct</a>
    <a href="/phpdestruct">Destruct</a>
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
    <center><h1 style="margin-left: -70px;">Destruct Function</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">A destructor is called when the object is destructed or the script is stopped or exited. If you create a __destruct () function,
     PHP will automatically call this function at the end of the script.</p></h4></center>

<div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
   <pre><h4><p style="font-family: Courier New"> < ?php
        class Shirt {
          public $name;
          public $color;
        
          function __construct($name) {
            $this->name = $name; 
          }
          function __destruct() {
            echo "The clothe is {$this->name}."; 
          }
        }
        
        $tshirt = new Shirt("T-shirt");
        ?>
<center> <font style="font-weight: 500;"> Output</font></center>
<center><img src="/img/destruct.png" style="border-radius: 20px"></center>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
        ></pre>

      </h4>
</div>
    

     </div>
    
@endsection