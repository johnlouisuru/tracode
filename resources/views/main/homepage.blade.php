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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script>
       
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
      </script>

    </head>
    <body>
        <nav id="navArea">
            <div class="logo">
              <a href="">
                <img src="img/tracodeaw.png" alt="your company logo">
              </a>
            </div>
            <ul>
              <li><a id="ahref" style="padding: 10px 10px 12px 10px;" href="/languages">Main </a></li>
            <li><a id="ahref" style="padding: 10px 10px 12px 10px;" href="#section1">Feature</a></li> 
            <li><a id="ahref" style="padding: 10px 10px 12px 10px;" href="#section2">Languages </a></li>
            <li><a id="ahref" style="padding: 10px 10px 12px 10px;" href="/about">About</a></li>
            </ul>
            <div x-data="{ open: false }" class="behind_container logindivtry" style="float: right; text-align: center; margin-left: 35%; padding: 3px; margin-top: 10px; ">
              <form action="/login"> <button class="logintry1">Log In</button></form>
          </div> 
        </nav>
         

        <h1> </h1>
            <div>  
             
            <img src="/img/1sth.jpg" class="img-fluid rounded imgsize">
            </div>

            <div data-aos="fade-up">
                <img src="/img/2ndl.jpg" id="section1"class="img-fluid rounded imgsize">
            </div>

            <div data-aos="fade-up">
                <img src="/img/3rdh.jpg" id="section2" class="img-fluid rounded imgsize">
            </div>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
</script>
    </body>
    </html>