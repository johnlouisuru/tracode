<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tracode</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="/img/logo.png" type="image/png" sizes="16x16">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script>
  AOS.init();
</script>
    </head>
    <body style="background-color:">


        <div id="mySidenav" class="sidenavhome">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <br>
            <h1><font color="#f54c4c"><center>Languages</font></h1>
            <a href="/phpintro">C# </a>
            <a href="/phpconnection">Java</a>
            <a href="/phpinserting">Php</a>
          </div>
          
          <div class="navcur">
            <br>
        <span style="font-size:30px; cursor:pointer; padding: 10px; color: white;" onclick="openNav()">&#9776;</span>
          </div>

          <div class="container-fluid">
          <img src="/img/tracodeaw.png"  style="width: 220px; height: 120px; margin-top: 10px; margin-left: -20px;">          
          <button type="button" class="btn btn-lg float-sm-right" style="background-color: pink; border-radius: 30px; margin: 40px 30px 0px 0px"> LOG IN </button>

          <hr style="margin-top: -10px;">
          <br>
          <div class="container-fluid">

            <div class="row justify-content-around">
              <div class = "col-md-auto">
            <img src="img/neversaygoodbye.jpg" style="border-radius: 30px;" >
              </div>
              <div class="row" >
            <div  class="col" >
              <div class=" card d-flex justify-content-center" style="border: none;">
                <h1 class="p-2"> Get Started for free </h1>
                <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
    </body>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    </html>