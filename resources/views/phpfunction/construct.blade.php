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
    <center><h1 style="margin-left: -70px;">Construct Function</h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">A constructor allows you to initialize an object's properties upon creation of the object.<br>
    If you create a <font color="red">__construct()</font> function, PHP will automatically call this function when you create an object from a class.</p></h4></center>

<div class ="d-flex justify-content-center div4" style="margin-left: 12%; border-radius: 20px;">
  <pre><h4><p style="font-family: Courier New">  < ?php
        class shirt {
          public $name;
          public $color;
        
          function __construct($name, $color) {
            $this->name = $name; 
            $this->color = $color; 
          }
          function get_name() {
            return $this->name;<
          }
          function get_color() {
            return $this->color;
          }
        }
        
        $tshirt = new shirt("T-shirt", "Black");
        echo $tshirt->get_name();
        echo "< br>";
        echo $tshirt->get_color();
        ?> 
      </p>
<center> <font style="font-weight: 500;"> Output</font></center>
<center><img src="/img/construct.png" style="border-radius: 20px"></center>
<form action="#"><button class="button trycode" type="submit">Try Code Here <span style="font-size: 20px;">&#8649;</span></button></form>
    </pre>
      </h4>
</div>

     </div>
    
@endsection