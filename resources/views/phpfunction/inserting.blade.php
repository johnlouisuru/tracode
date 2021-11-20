@extends('main.navcon')
@section('content')
    
<div id="mySidenav" class="sidenav2" style="margin-left: 215px;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h1><font color="red"><center>PHP</center></font></h1>
    <a href="/phpadvance2">MySQL </a>
    <a href="/phpconnection">Connection</a>
    <a href="/phpinserting">Inserting</a>
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
    <center><h1 style="margin-left: -150px;">Inserting Data </h1></center>
   
</div>
<center><h4 style="margin-top: 30px; "><p style="font-family: Trebuchet MS">After a database and a table have been created, we can start adding data in them.</p></h4></center>


<div class="d-flex div4" style="margin-left: 11%; border-radius: 20px;">
  <pre>
    <h4><p style="font-family: Courier New"> 
    Here are some syntax rules to follow:
    •	The SQL query must be quoted in PHP
    •	String values inside the SQL query must be quoted
    •	Numeric values must not be quoted
    •	The word NULL must not be quoted
    

INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...)

</pre>
</h4>
</div>
    
    
@endsection