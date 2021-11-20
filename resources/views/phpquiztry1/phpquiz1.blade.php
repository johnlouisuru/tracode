
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

  <x-slot name="header">
  
      <nav class="font-semibold text-xl text-gray-800">
          {{ __('Php Quiz') }}
       
        <div class="float-right">
          PHP Score: {{Auth::user()->phpscore}}
            </div>
      </nav>
  </x-slot>
  <input id="score" type="hidden" value="{{Auth::user()->phpscore}}">
<div class="sidenav">
  <div style="background-color: #1D1C1A; color: white; height: 6%; padding-top: 0.5%;">
    <p> <center><P >PHP</P></center> </p>
  </div>
    <div class="button" id="button1">
    <x-nav-link class="navdes" :href="route('phpquiztry1.phpquiz1')" :active="request()->routeIs('phpquiztry1.phpquiz1')" >
    <button id="nbtn1" class="unstyled-button " title="points required 0">
    {{ __('Level 1')}} </button></x-nav-link>
    </div>
    <div class="button"  title="points required 1000">
      <a href="{{ route('phpquiztry2.phpquiz2') }}" class="navdes">
      <button id="nbtn2" class="unstyled-button" disabled>
     {{ __('Level 2')}}</button></a>
    </div>
    
    <div class="button"  title="points required 2000">
      <a href="{{ route('phpquiztry3.phpquiz3') }}" class="navdes">
      <button id="nbtn3" class="unstyled-button" disabled>
     {{ __('Level 3')}}</button></a>
    </div>
  
    <div class="button"  title="points required 3000">
      <a href="{{ route('phpquiztry4.phpquiz4') }}" class="navdes">
      <button id="nbtn4" class="unstyled-button" disabled>
     {{ __('Level 4')}}</button></a>
    </div>

    <div class="button" title="points required 4000">
      <a href="{{ route('phpquiztry5.phpquiz5') }}" class="navdes">
      <button id="nbtn5" class="unstyled-button" disabled>
     {{ __('Level 5')}}</button></a></div>
    
</div>
    <div style="margin-left: 215px"> 
        <div class=" container-fluid h-90">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
                    <div class="card text-center" style=" background-color: white; border: 1px solid black; margin-top:50px;">
                        <div class="card-header" style="background-color: rgb(238, 109, 109); color: black; border-bottom:1px solid black; margin-bottom: 20px;">
                            <p style="font-size: 30px; font-weight">PHP Problem #1</p>
                            <a onclick="cond2()" href="#" style="text-decoration: none; color: black; " class=" h5">&#x1F4A1;</a>&emsp;&emsp;
                            <a href="https://onecompiler.com/php" style="text-decoration: none; color: black; " class=" h5" target="_blank">&#9998;</a>
                                </div>
                                <h3><b><i>
                                    Display your name using the basic echo function!
                                </i></b></h3>
                                <div><form id="formm" method="GET" action="/phpquiztry1update/{{Auth::user()->id}}/edit">
                                <div style="margin-left: -55%"><p style="font-family: Courier New">&lt;?php </p></div>
                                <div style=" ">
                                <p style="font-family: Courier New"><input style="border:none; border-bottom:1px solid; background:transparent;width:150px;" type="text" name="value" placeholder="Function" id="ans1" class="m-2 p-1">"<input style="border:none; border-bottom:1px solid; background:transparent;width:150px;" type="text" name="trysagot" placeholder="Enter value" id="ans2" class="m-2 p-1">";</p></div>
                                <div style="margin-left: -55%"><p style="font-family: Courier New">?> </p></div>
                                <div style="margin-top:1%;" class="col"> 
                                <br>
                               <button id="btnans" type="submit" onclick="cond()" style="color:green; font-weight:100;">✔️ Proceed</button></div></form></div>
                               <center><button id="btn1" onclick="check()"> Submit Answer</button></center>
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
                            if(a=="echo" && b!="" || a=="Echo" && b!="" || a=="ECho" && b!=""|| a=="ECHo" && b!="" || a=="ECHO" && b!="" || a=="EcHo" && b!=""
                            || a=="eCho" && b!="" || a=="ecHO" && b!="" || a=="EchO" && b!=""){
                              document.getElementById("btnans").style.visibility = "visible";
                            }
                        
                        else{
                            alert("Try again!");
                        }
                    }
                        function cond(){
                            var a=document.getElementById("ans1").value;
                            var b=document.getElementById("ans2").value;
                            if(a=="echo" && b!="" || a=="Echo" && b!="" || a=="ECho" && b!=""|| a=="ECHo" && b!="" || a=="ECHO" && b!="" || a=="EcHo" && b!=""
                            || a=="eCho" && b!="" || a=="ecHO" && b!="" || a=="EchO" && b!=""){
                            document.getElementById("btn1").disabled = false;
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
            
            </script>
<div onclick="cond2()" id="myDIV" style="display: none; top: 50%; left: 58%; 
transform: translate(-50%, -50%); z-index: 100; position: absolute;">
TRIVIA: This is the simple way of displaying your work in php
</div>

              </div>
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





