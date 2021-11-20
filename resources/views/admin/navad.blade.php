
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="icon" href="/img/logo.png" type="image/png" sizes="16x16">
        </head>
        <body style="background-color: #ffebea">
         
     <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f7a8ac">
    <a class="navbar-brand" href="/admin">Admin Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="/javadiff">Java</a>
        <a class="nav-item nav-link" href="/cdiff">C#</a>
        <a class="nav-item nav-link" href="/phpdiff">Php</a>
        
      </div>
      <div  class=" nav-item nav-link ml-auto">
      <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" >
                                {{ __('Log Out') }}
                            </x-nav-link>
                        </form>
      </div>   
    </div>
  </nav>
  @include('inc.messages')
  @yield('contents')
        </body>
</html>