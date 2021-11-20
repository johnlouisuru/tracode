<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <body style="background-color: #32bbc2">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <br>
    <div class="container">
    <div class="row">
    <div class="col-md-6 no-pad">
    <div class="user-pad">
    <h1 style="margin-top: 3%; color:white;font-weight: bold;font-size:30px;">Welcome, {{Auth::user()->name}}!</h1>
    <nav x-data="{ open: false }">
        <div style="color:white;font-weight: bold;font-size:15px; margin-left:5px;">{{Auth::user()->email}}</div>
    </nav>
    </div>
    </div>				
  </div>
    </div>
    <div class="container1">
    <table class="table table-responsive-md">
    <tr>
    <td style="text-align: center; width: 250px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/PHP_Logo%2C_text_only.svg/800px-PHP_Logo%2C_text_only.svg.png" width="200px" height="auto" style="margin-top: 15%; margin-left: 7%;"></td>
    <td style="text-align: center; width: 250px;"><img src="https://th.bing.com/th/id/R31ccf6b00ca06840c2e131bf2bc00a40?rik=VQlxmxQmDTQnCQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fjava-png-java-icon-1600.png&ehk=Ken84AvpJ83RtHDABENcApKB7bycz9ZpTDmKurCwCPU%3d&risl=&pid=ImgRaw" width="200px" height="140px" style="margin-left: 5%;"></td>
    <td style="text-align: center; width: 250px;"><img src="https://cdn.iconscout.com/icon/free/png-256/c-sharp-3-599433.png" width="200px" height="140px" style="margin-left: 4%;"></td>
    </tr>
    <tr>
        <td style="text-align: center;"> <x-button style="margin-right: 12%; background-color: #ffbf00;"><x-nav-link style="text-decoration: none !important; color: black; font-weight: bold;" :href="route('difficultylevel.phpdifficulty')" :active="request()->routeIs('difficultylevel.phpdifficulty')">{{ __('Start Quiz')}} </x-nav-link></x-button></td>
        <td style="text-align: center;"><x-button style="margin-right: 12%; background-color: #ffbf00;"><x-nav-link style="text-decoration: none !important; color: black; font-weight: bold;" :href="route('difficultyleveljava.javadifficulty')" :active="request()->routeIs('javadifficultylevel.javadifficulty')">{{ __('Start Quiz')}} </x-nav-link></x-button></td>
        <td style="text-align: center;"><x-button style="margin-right: 12%; background-color: #ffbf00;"><x-nav-link style="text-decoration: none !important; color: black; font-weight: bold;" :href="route('difficultylevelcsharp.csharpdifficulty')" :active="request()->routeIs('difficultylevelcsharp.csharpdifficulty')">{{ __('Start Quiz')}} </x-nav-link></x-button></td>
    </tr>
    <tr x-data="{ open: false }">
    <td style="text-align: center;"><br><h4 style="margin-top: 20px; margin-right: 25%; color:white;  width: 220px; font-weight: bold;font-size:15px; border: 2px solid white; padding: 10px;">PHP Knowledge Score: {{ Auth::user()->phpscore}}</h4> </td>
     <td style="text-align: center;"><br><h4 style="margin-top: 20px; margin-right: 25%; color:white; width: 220px; font-weight: bold;font-size:15px; border: 2px solid white; padding: 10px;">Java Knowledge Score: {{ Auth::user()->javascore}}</h4> </td>
     <td style="text-align: center;"><br><h4 style="margin-top: 20px;  margin-right: 25%; color:white; width: 220px; font-weight: bold;font-size:15px; border: 2px solid white; padding: 10px;">C# Knowledge Score: {{ Auth::user()->csharpscore}}</h4></td>
</tr>

    </table>
    </div>
  </div>
</body>
    <style>
    .container { 
    margin-left: 11.7%;
    width: 1000px;
    }
    .container1 { 
    margin-left: 23%;
    margin-top: 1%;
    width: 1000px;
    }
    img {
      display: block;
    }
    .center {
      margin-right: -15%;
      text-align: center;
      border: 3px solid green;
    }	
    </style>
</x-app-layout>
