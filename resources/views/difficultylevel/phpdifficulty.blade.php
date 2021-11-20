<x-app-layout>
    <x-slot name="header">
      <nav class="font-semibold text-xl text-gray-800">
        {{ __('Php Quiz') }}
     
      <div class="float-right">
       PHP Knowledge points: {{Auth::user()->phpscore}}
          </div>
    </nav>
    </x-slot>
    <body style="background-color: #32bbc2">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <br>
<div class="container" style="margin-left:15%; margin-top : 8%;">
    <input id="phpscore"hidden >
    <input id="phpreqinterscore" value="{{$phpquizreq->Intermediate}}" hidden>
    <input id="phpreqadvascore" value="{{$phpquizreq->Advance}}" hidden>

    <div class="flex-container">
    <div class="flex-child 1">
        <p style="text-align: center; margin-right: 8%; font-size: 25px; color: white; font-weight: bold; background-color: #1f2937; border-radius: 10px; border: 1px solid black">Basic Level</p>
    </div>
    <div class="flex-child 2">
        <p style="text-align: center; margin-right: 11%; font-size: 25px; color: white; font-weight: bold; background-color: #1f2937; border-radius: 10px; border: 1px solid black">Intermediate Level</p><br> <p style="text-align: center; margin-right: 10%; font-weight: bold;">Required points to access this level:</p><div style="display: flex; margin-left: 34%; "><p id="interscore" style="font-weight: bold;"></p><p style="font-weight: bold">&nbsp;points</p></div>
    </div>
    <div class="flex-child 3">
      <p style="text-align: center; margin-left: 1%; margin-right: 6%; font-size: 25px; color: white; font-weight: bold; background-color: #1f2937; border-radius: 10px; border: 1px solid black">Advanced Level</p><br> <p style="text-align: center; margin-right: 5%; font-weight: bold;">Required points to access this level:</p><div style="display: flex; margin-left: 36%;"><p id="advascore" style="font-weight: bold;"></p><p style="font-weight: bold;">&nbsp;points</p></div>
    </div>
    </div>
     <table class="table table-responsive-md">
    <tr>
      <td style="text-align: center;"> <x-button style="margin-right: 30px; background-color: #ffbf00; border-radius: 10px; border: 1px solid black;font-weight: bold;"><x-nav-link style="text-decoration: none !important; color: white; font-size: 30px;padding: 40px 40px 40px 40px; font-weight: bold;" :href="route('difficultylevel.phpdquizbasic')" :active="request()->routeIs('difficultylevel.phpdquizbasic')">{{ __('Start Quiz')}} </x-nav-link></x-button></td>
        <td style="text-align: center;"><a href="/phpquizinterdifficult"><x-button id="interbtn" disabled style="margin-right: -100px; text-decoration: none !important; color: white; font-size: 30px;padding: 50px 50px 50px 50px; background-color: #ffbf00; border-radius: 10px; border: 1px solid black; font-weight: bold;" >{{ __('Start Quiz')}} </x-button></a></td>
        <td style="text-align: center;"><a href="/phpquizadvadifficult"><x-button id="advabtn" disabled  style="margin-right: -565px; text-decoration: none !important; color: white; font-size: 30px;padding: 50px 50px 50px 50px; background-color: #ffbf00; border-radius: 10px; border: 1px solid black; font-weight: bold;">{{ __('Start Quiz')}} </x-button></a></td>
    </tr>
  </table>
  <br>
  <div class="flex-container">


      <div class="flex-child 4"><p style="margin-left: 25%;">Points obtained: </p><p style="margin-left: 14%;"><input id="phpbasicscore" style="text-align:center; background:transparent; text-decoration: none !important;" value="{{$scorbas}}"disabled></p></div>
        <div class="flex-child 5"><p style="margin-left: 25%;">Points obtained: </p><p style="margin-left: 15%;"><input id="phpinterscore" style="text-align:center; background:transparent; text-decoration: none !important;" value="{{$scorinter}}"disabled><p></div>
          <div class="flex-child 6"><p style="margin-left: 29%;">Points obtained: </p><p style="margin-left: 18%;"><input id="phpadvscore" style="text-align:center; background:transparent; text-decoration: none !important;" value="{{$scoradva}}"disabled></p></div>


    </div>
  </div>
  
<script>
var basic = document.getElementById("phpbasicscore").value;
var inter = document.getElementById("phpinterscore").value;
var adv = document.getElementById("phpadvscore").value;
var total = parseInt(basic) + parseInt(inter) + parseInt(adv);
document.getElementById("phpscore").value = total;
var totalscore = document.getElementById("phpscore").value;
var interreq = document.getElementById("phpreqinterscore").value;
var advareq = document.getElementById("phpreqadvascore").value;
var scorings1 = parseInt(interreq);
var scorings2 = parseInt(advareq);
document.getElementById("interscore").innerHTML=interreq;
document.getElementById("advascore").innerHTML=advareq;


if (totalscore >= scorings1){
  document.getElementById("interbtn").disabled = false;
}
if (totalscore >= scorings2){
  document.getElementById("advabtn").disabled = false;
}
</script>

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
