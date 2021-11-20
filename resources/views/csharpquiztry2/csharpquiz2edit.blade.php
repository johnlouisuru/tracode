
<x-app-layout>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/navreg.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body onload="myFunction()">
      <x-slot name="header">
  
        <nav class="font-semibold text-xl text-gray-800">
            {{ __('C# Quiz') }}
         
          <div class="float-right">
            C# Score: {{Auth::user()->csharpscore}}
              </div>
        </nav>
    </x-slot>
    <input id="score" type="hidden" value="{{Auth::user()->csharpscore}}">
<div class="sidenav">
  <div style="background-color: #1D1C1A; color: white; height: 6%; padding-top: 0.5%;">
    <p> <center><P >C#</P></center> </p>
  </div>
    <div class="button" id="button1">
      <a href="{{ route('csharpquiztry1.csharpquiz1') }}" class="navdes">
      <button id="nbtn1" class="unstyled-button">
     {{ __('Level 1')}}</button></a>
    </div>
  <div class="button">
      <x-nav-link class="navdes" :href="route('csharpquiztry2.csharpquiz2')" :active="request()->routeIs('csharpquiztry2.csharpquiz2')" >
      <button  class="unstyled-button" id="nbtn2">
      {{ __('Level 2')}} </button></x-nav-link>
      </div>
    
      <div class="button">
        <a href="{{ route('csharpquiztry3.csharpquiz3') }}" class="navdes">
        <button id="nbtn3" class="unstyled-button" disabled>
       {{ __('Level 3')}}</button></a>
      </div>
      <div class="button">
        <a href="{{ route('csharpquiztry4.csharpquiz4') }}" class="navdes">
        <button id="nbtn4" class="unstyled-button" disabled>
       {{ __('Level 4')}}</button></a>
      </div>
      <div class="button">
        <a href="{{ route('csharpquiztry5.csharpquiz5') }}" class="navdes">
            <button id="nbtn5" class="unstyled-button" disabled>
           {{ __('Level 5')}}</button></a>
          </div>
 
</div>
  <div style="margin-left: 215px"> 
      <div class=" container-fluid h-90">
          <div class="row align-items-center h-100">
              <div class="col-6 mx-auto">
                <div class="card text-center" style=" background-color: white; border: 1px solid black; margin-top:50px;">
                  <div class="card-header" style="background-color: rgb(238, 109, 109); color: black; border-bottom:1px solid black; margin-bottom: 20px;">
                      <p style="font-size: 30px; font-weight">C# Problem #2</p>
                          <a onclick="cond2()" href="#" style="text-decoration: none; color: black; " class=" h5">&#x1F4A1;</a>&emsp;&emsp;<a href="https://onecompiler.com/csharp" style="text-decoration: none; color: black; " class=" h5" target="_blank">&#9998;</a>
                              </div>
                              <h3><b><i>
                                  Complete the code using write function
                              </i></b></h3>
                              <div><form id="formm" method="GET" action="/csharpquiztry2update/{{Auth::user()->id}}/edit">
                                @csrf
                              <br>
                              <p style="margin-left:-45%;font-family: Courier New">using System;</p>
                              <p style="margin-left:-30%;font-family: Courier New">namespace <input style="border:none; border-bottom:1px solid; background:transparent;width:90px;" type="text" placeholder="Filename"  id="ans1" class="m-2 p-1"></p>
                              <p style="margin-left:-65%;font-family: Courier New">{</p>
                              <p style="margin-left:-39%;font-family: Courier New">class Program</p>
                              <p style="margin-left:-65%;font-family: Courier New">{</p>
                              <p style="margin-left:-5%;font-family: Courier New">static void Main (string[] args)</p>
                              <p style="margin-left:-65%;font-family: Courier New">{</p>
                              <p style="font-family: Courier New">Console.<input style="border:none; border-bottom:1px solid; background:transparent;width:90px;" type="text" name="value" placeholder="Function" id="ans2" class="m-2 p-1">("<input style="border:none; border-bottom:1px solid; background:transparent;width:90px;" type="text" name="trysagot" placeholder="Display" id="ans3" class="m-2 p-1">");</p>
                              <p style="margin-left:-45%;font-family: Courier New">}</p>
                              <p style="margin-left:-55%;font-family: Courier New">}</p>
                              <p style="margin-left:-65%;font-family: Courier New">}</p>
                              <div style="" class="col"> 
                                <br>
                                <button id="btnans" type="submit" onclick="cond()"style="color:green; font-weight:100;">✔️ Proceed</button> </div></form> 
                                <center><button id="btn1" name="different" onclick="check()">Submit Answer</button></center>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>


                  <script>
                      
                      document.getElementById("btnans").style.visibility = "hidden";
                      $("#formm").on("keydown", function(e){
   if(e.keyCode === 13){
       e.preventDefault();
   }
});
                      var l=document.getElementById("score").value;
                      if(l >= 1000){
                        document.getElementById("nbtn1").disabled =false;
                        document.getElementById("nbtn2").disabled =false;
                      }
                      if(l >= 2000){
                        document.getElementById("nbtn1").disabled =false;
                        document.getElementById("nbtn2").disabled =false;
                        document.getElementById("nbtn3").disabled =false;
                      }
                      if(l >= 3000){
                        document.getElementById("nbtn1").disabled =false;
                        document.getElementById("nbtn2").disabled =false;
                        document.getElementById("nbtn3").disabled =false;
                        document.getElementById("nbtn4").disabled =false;
                      }
                      if(l >= 4000){
                        document.getElementById("nbtn1").disabled =false;
                        document.getElementById("nbtn2").disabled =false;
                        document.getElementById("nbtn3").disabled =false;
                        document.getElementById("nbtn4").disabled =false;
                        document.getElementById("nbtn5").disabled =false;
                      }
                      if(l >= 5000){
                        document.getElementById("nbtn1").disabled =false;
                        document.getElementById("nbtn2").disabled =false;
                        document.getElementById("nbtn3").disabled =false;
                        document.getElementById("nbtn4").disabled =false;
                         document.getElementById("nbtn5").disabled =false;
                      }
                      function check(){
                          var a=document.getElementById("ans1").value;
                          var b=document.getElementById("ans2").value;
                          var c=document.getElementById("ans3").value;
                            if(a!="" && b=="WriteLine" && c!="" || a!="" && b=="Write" && c!="" ){
                              document.getElementById("btnans").style.visibility = "visible";
                            }
                        
                        else{
                            alert("Try again!");
                        }
                    }
                      function cond(){
                          var a=document.getElementById("ans1").value;
                          var b=document.getElementById("ans2").value;
                          var c=document.getElementById("ans3").value;
                          if(a!="" && b=="WriteLine" && c!="" || a!="" && b=="Write" && c!="" ){
                          document.getElementById("btn2").disabled = false;
                          document.getElementById("popup-1").classList.toggle("active");
                          
                          document.getElementById("displayvalue2").innerHTML = c;
                          }
                      
                      else{
                          alert("Try again!");
                      }
                  }
                  function cond2() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
          x.style.display = "block";
          } else {
          x.style.display = "none";
          }
          }
          
          function myFunction() {
                    document.getElementById("popup-1").classList.toggle("active");
                    }
          </script>
<div onclick="cond2()" id="myDIV" style="display: none; top: 50%; left: 58%; 
transform: translate(-50%, -50%); z-index: 100; position: absolute;">
TRIVIA: Displaying data may differ per language
</div>

  
<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div style="margin-top:5%; margin-left:8%;"class="content">
    <div class="close-btn" onclick="myFunction()">×</div>
    <h3>Congratulations!</h3>
    <h2>    +1000 ⭐</h2>
    <p style="margin-left: -75%;">Your Output is: </p>
    <div style="padding:10px; background-color: #1A1B1D;">
    <input id="popanswer" style="background-color: transparent; border:none; color: white; margin-left: -45%;" type="text" disabled value="{{ request('trysagot') }}">
      
    </div>
    <input id="scorevalue" type="hidden" value="{{Auth::user()->csharpscore}}">
    {!! Form::open(['action'=>['App\Http\Controllers\QuizScore\csharpquiztry2update@update',$users->id],'method'=>'POST','class'=>'pull-right']) !!}
          {{Form::hidden('csharpscore','2000',['id'=>'1'])}}
          {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Proceed',['class'=>'btn-primary','style'=>'margin-top: 10px; width: 100px; border-radius: 10px;'])}}
            {!! Form::close() !!}
  </div>
</div>
<script>
  var q=document.getElementById("scorevalue").value;
  if(q >=2000){
  var z=document.getElementById("1").value= q;
               }
  </script>
          </x-app-layout>
              <style>

.unstyled-button {
outline: none;
border: none;
padding: 0;
background: none;
}    
.unstyled-button:focus{
  outline: none;
border: none;
}     

.button {
width: 213px;
height: 53px;
background-color: #c62121;
color: white;
padding: 10px;}

.button:hover {
background-color: tomato;
color: white;
}
#im {
border: 5px solid #555;
}

.popup .overlay {
position:fixed;
top:0px;
left:0px;
width:100vw;
height:100vh;
background:rgba(0,0,0,0.7);
z-index:1;
display:none;
}

.popup .content {
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%) scale(0);
background:#fff;
width:95%;
max-width:500px;
height:250px;
z-index:2;
text-align:center;
padding:20px;
box-sizing:border-box;
font-family:"Open Sans",sans-serif;
}

.popup .close-btn {
cursor:pointer;
position:absolute;
right:20px;
top:20px;
width:30px;
height:30px;
background:#222;
color:#fff;
font-size:25px;
font-weight:600;
line-height:30px;
text-align:center;
border-radius:50%;
}

.popup.active .overlay {
display:block;
}

.popup.active .content {
transition:all 300ms ease-in-out;
transform:translate(-50%,-50%) scale(1);
}


</style>





