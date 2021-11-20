<x-app-layout>
    <x-slot name="header">
      <nav class="font-semibold text-xl text-gray-800">
        {{ __('Csharp Quiz') }}
     
      <div class="float-right">
       Csharp Knowledge points: {{Auth::user()->csharpscore}}
          </div>
    </nav>
    </x-slot>
    <body style="background-color: #32bbc2">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <br>
    <div class="container" style="margin-left:15%; margin-top : 8%;">
    <input id="score" value="{{Auth::user()->csharpscore}}" hidden>
    <input id="reqinterscore" value="{{$csharpquizreq->Intermediate}}" hidden>
    <input id="reqadvascore" value="{{$csharpquizreq->Advance}}" hidden>

    <div class="flex-container">
    <div class="flex-child 1">
      <p style="text-align: center; margin-right: 7%; margin-left: 1%; font-size: 25px; color: white; font-weight: bold; background-color: #1f2937; border-radius: 10px; border: 1px solid black">Basic Level</p>
  </div>
  <div class="flex-child 2">
    <p style="text-align: center; margin-right: 9%; margin-left: -3%; font-size: 25px; color: white; font-weight: bold; background-color: #1f2937; border-radius: 10px; border: 1px solid black">Intermediate Level</p><br><p style="text-align: center; margin-right: 10%; font-weight: bold;">Required points to access this level:</p><div style="display: flex; margin-left: 34%; "><p id="interscr" style="font-weight: bold;"></p><p style="font-weight: bold;">&nbsp;points</p></div>
  </div>
  <div class="flex-child 3">
    <p style="text-align: center; margin-right: 5%; margin-left: 1%; font-size: 25px; color: white; font-weight: bold; background-color: #1f2937; border-radius: 10px; border: 1px solid black">Advanced Level</p><br> <p style="text-align: center; margin-right: 2%; font-weight: bold;">Required points to access this level:</p><div style="display: flex; margin-left: 39%;"><p id="advascr" style="font-weight: bold;"></p><p style="font-weight: bold;">&nbsp;points</p></div>
  </div>
    </div>
    <table class="table table-responsive-md">
      <tr>
        <td style="text-align: center;"> <x-button style="margin-right: 30px; background-color: #ffbf00; border-radius: 10px; border: 1px solid black;font-weight: bold;"><x-nav-link style="text-decoration: none !important; color: white; font-size: 30px;padding: 40px 40px 40px 40px; font-weight: bold;" :href="route('difficultylevelcsharp.csharpquizbasic')" :active="request()->routeIs('difficultylevelcsharp.csharpquizbasic')">{{ __('Start Quiz')}} </x-nav-link></x-button></td>
        <td style="text-align: center;"><a href="/csharpquizinterdifficult"><x-button id="interbtn" disabled style="margin-right: -100px; text-decoration: none !important; color: white; font-size: 30px;padding: 50px 50px 50px 50px; background-color: #ffbf00; border-radius: 10px; border: 1px solid black; font-weight: bold;">{{ __('Start Quiz')}} </x-button></a></td>
        <td style="text-align: center;"><a href="/csharpquizadvadifficult"><x-button id="advabtn" disabled style="margin-right: -565px; text-decoration: none !important; color: white; font-size: 30px;padding: 50px 50px 50px 50px; background-color: #ffbf00; border-radius: 10px; border: 1px solid black; font-weight: bold;">{{ __('Start Quiz')}} </x-button></a></td>
      </tr>
    </table>
    <br>
    <div class="flex-container">
      <div class="flex-child 4"><p style="margin-left: 28%;">Points obtained: </p><p style="margin-left: 17%;"><input id="basicscore" style="text-align:center; background:transparent; text-decoration: none !important;" value="{{$scorbas}}"disabled></p></div>
        <div class="flex-child 5"><p style="margin-left: 26%;">Points obtained: </p><p style="margin-left: 15%;"><input id="interscore" style="text-align:center; background:transparent; text-decoration: none !important;" value="{{$scorinter}}"disabled></p></div>
          <div class="flex-child 6"><p style="margin-left: 30%;">Points obtained: </p><p style="margin-left: 20%;"><input id="advscore" style="text-align:center; background:transparent; text-decoration: none !important;" value="{{$scoradva}}"disabled></p></div>
        </div>
      </div>


    <script>
      var basic = document.getElementById("basicscore").value;
      var inter = document.getElementById("interscore").value;
      var adv = document.getElementById("advscore").value;
      var total = parseInt(basic) + parseInt(inter) + parseInt(adv);
      document.getElementById("score").value = total;
      var totalscore = document.getElementById("score").value;
      var interreq = document.getElementById("reqinterscore").value;
      var advareq = document.getElementById("reqadvascore").value;
      var scorings1 = parseInt(interreq);
      var scorings2 = parseInt(advareq);
      document.getElementById("interscr").innerHTML = interreq;
      document.getElementById("advascr").innerHTML = advareq;
      
      if (totalscore >= scorings1){
        document.getElementById("interbtn").disabled = false;
      }
      if (totalscore >= scorings2){
        document.getElementById("advabtn").disabled = false;
      }
      </script>
   
    </table>
    </div>
    <style>
    .container { 
    margin-left: 26%;
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

    .flex-container {
    display: flex;
    }

      .flex-child {
          flex: 1;
          
      }  

      .flex-child:first-child {
          margin-right: 20px;
      } 
    </style>
    </body>
</x-app-layout>
