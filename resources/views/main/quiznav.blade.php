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
        </head>
        <body style="background-color: #ffebea">
        <div class="navtop">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/profile">Profile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="/javaintro">Java</a>
        <a class="nav-item nav-link" href="/cintro">C#</a>
        <a class="nav-item nav-link" href="/phpintro">Php</a>
      </div>
    </div>
    <a href="/profile" style="text-decoration: none; color: green;" class="float-sm-right"> Name<img src="/img/login.png" style="height: 40px; width: 40px"></a>
  </nav>
 </div>
 <div>
  @yield('navquiz')
 </div>
        </body>
</html>