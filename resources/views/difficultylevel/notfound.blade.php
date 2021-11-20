
<x-app-layout x-data="{ open: false }">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/navreg.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="deisgn.css">
    </head>

    <x-slot name="header">
  
      <nav class="font-semibold text-xl text-gray-800">
          {{ __('Php Quiz') }}
       
        <div class="float-right">
          PHP Score: {{Auth::user()->phpscore}}
            </div>
      </nav>
  </x-slot>

  <body>

    <h1> Quiz Not Found </h1>
  </body>
</x-app-layout>