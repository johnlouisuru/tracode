
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
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script src="{{url('js/jquery-linedtextarea.js')}}"></script>
    <link href="{{url('css/jquery-linedtextarea.css')}}" type="text/css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        body { background-color: #fafafa; font-family: 'Roboto Condensed'; }
        .container { margin: 150px auto; max-width: 960px; text-align: center;}
      </style>
    </head>

    <x-slot name="header">
  
      <nav class="font-semibold text-xl text-gray-800">
          {{ __('Php Quiz') }}
       
        <div class="float-right">
          PHP Score: {{Auth::user()->phpscore}}
            </div>
      </nav>
  </x-slot>

  <body style="background-color: #90ebf0">
    <div class="container">
      <div style="z-index: 100; margin-top: -15%;">
        <div class="card m-4" style="background-color: transparent; border: none!important;">
          <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid black; ">
     <center> <h1>{{$phpquizs->title}}</h1><a onclick="cond2()" href="#" style="text-decoration: none; color: black; " class=" h5">&#x1F4A1;</a></center>
  </div>
  <div class="card-body bg-white" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; ">
    <pre style=" text-align: left; border: none!important; border-radius: 0%; color: black;">{{$phpquizs->question}}</pre>
  </div>
</div>
    </div>
  </div>
  <div style="margin-left: 13%; margin-top: -8%;">

        <input id="admin" placeholder="admin key word" value="{{$phpquizs->answerkey}}" hidden>
        <input id="admin2" placeholder="admin key word2"  value="{{$phpquizs->answerkey2}}" hidden>
        <input id="admin3" placeholder="admin key word3"  value="{{$phpquizs->answerkey3}}" hidden>

        <h5>Enter Syntax Code</h5>
          
        <textarea id="source" class ="lined" style=" width: calc(53% - 7px); resize: none;" rows="15" placeholder="Enter Syntax Code Here" spellcheck="false" >&lt;?php

?>
  </textarea>
    <br>
        <select id="lang" hidden>
            <option>PHP</option>
        </select>
      <button id="run" onclick="run()" style="border: 1px black solid; padding: 10px; border-radius: 10px; background-color: #FF4F4B; font-weight: bold; color:white;">▶️ Run &nbsp;</button> 
      &nbsp;&nbsp;&nbsp; <button style="border: 1px black solid; padding: 10px; border-radius: 10px; background-color: rgb(14, 177, 14); font-weight: bold; color:white;" onclick="sample()" >SUBMIT</button>
      &emsp;&emsp;<textarea id="checkans" placeholder="answer checker" style="margin-left:3%; background-color: white; font-size: large; height:min-content; border: transparent; resize: none; border: 1px black solid;" rows ="1" disabled> </textarea>
      <br><br>
        <textarea id="input" style="width: calc(53% - 8px); resize: none;" placeholder="Input Value here If Needed" ></textarea>
        <textarea readonly id="output" style=" margin-top: -50%; width: 30%; background-color: black; color: white; resize: none; padding-bottom: 2.6%;" rows="17" placeholder="This will display the output of your code" ></textarea>

      </div>
          <script type="text/javascript">



            API_KEY = "0c40113492msh47c2a937e8d2dbep1f25bbjsn11f728b86224";
      
            var language_to_id = {
                "C#": 51,
                "Java": 62,
                "PHP": 68,
            };
      
            function encode(str) {
                return btoa(unescape(encodeURIComponent(str || "")));
            }
      
            function decode(bytes) {
                var escaped = escape(atob(bytes || ""));
                try {
                    return decodeURIComponent(escaped);
                } catch {
                    return unescape(escaped);
                }
            }
      
            function errorHandler(jqXHR, textStatus, errorThrown) {
                $("#output").val(`${JSON.stringify(jqXHR, null, 4)}`);
                $("#run").prop("disabled", false);
            }
      
            function check(token) {
                $("#output").val($("#output").val() + "\n⏬ Checking submission status...");
                $.ajax({
                    url: `https://judge0-ce.p.rapidapi.com/submissions/${token}?base64_encoded=true`,
                    type: "GET",
                    headers: {
                        "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
                      "x-rapidapi-key": API_KEY
                    },
                    success: function (data, textStatus, jqXHR) {
                        if ([1, 2].includes(data["status"]["id"])) {
                            $("#output").val($("#output").val() + "\nℹ️ Status: " + data["status"]["description"]);
                            setTimeout(function() { check(token) }, 1000);
                        }
                        else {
                            var output = [decode(data["compile_output"]), decode(data["stdout"])].join("\n").trim();
                            $("#output").val(`${data["status"]["id"] != "3" ? "🔴" : "🟢"} ${data["status"]["description"]}\n${output}`);
                            $("#run").prop("disabled", false);
                        }
                    },
                    error: errorHandler
                });
            }
      
            function run() {
                $("#run").prop("disabled", true);
                $("#output").val("⚙️ Creating submission...");
      
                let encodedExpectedOutput = encode($("#expected-output").val());
                if (encodedExpectedOutput === "") {
                    encodedExpectedOutput = null; // Assume that user does not want to use expected output if it is empty.
                }
      
                $.ajax({
                    url: "https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true&wait=false",
                    type: "POST",
                    contentType: "application/json",
                    headers: {
                        "x-rapidapi-host": "judge0-ce.p.rapidapi.com",
                      "x-rapidapi-key": API_KEY
                    },
                    data: JSON.stringify({
                        "language_id": language_to_id[$("#lang").val()],
                        "source_code": encode($("#source").val()),
                        "stdin": encode($("#input").val()),
                        "expected_output": encodedExpectedOutput,
                        "redirect_stderr_to_stdout": true
                    }),
                    success: function(data, textStatus, jqXHR) {
                        $("#output").val($("#output").val() + "\n🎉 Submission created.");
                        setTimeout(function() { check(data["token"]) }, 2000);
                    },
                    error: errorHandler
                });
            }
      
            $("body").keydown(function (e) {
                if (e.ctrlKey && e.keyCode == 13) {
                    run();
                }
            });
      
            $("textarea").keydown(function (e) {
                if (e.keyCode == 9) {
                    e.preventDefault();
                    var start = this.selectionStart;
                    var end = this.selectionEnd;
      
                    var append = "    ";
                    $(this).val($(this).val().substring(0, start) + append + $(this).val().substring(end));
      
                    this.selectionStart = this.selectionEnd = start + append.length;
                }
            });
      
            $("#source").focus();


            function sample(){
var str = document.getElementById('source');
var str2 = document.getElementById('admin');
var str3 = document.getElementById('admin2');
var str4 = document.getElementById('admin3');
var reg = new RegExp(str2.value, "i");
var reg2 = new RegExp(str3.value, "i");
var reg3 = new RegExp(str4.value, "i");
var result = str.value.match(reg);
var result2 = str.value.match(reg2);
var result3 = str.value.match(reg3);
var out = document.getElementById('output');

if(str3 == "" && str4 == ""){
if(result && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
}
if(str2 == "" && str4 == ""){
if(result2 && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
}
if(str2 == "" && str3 == ""){
if(result3 && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
}

if(str2 !="" && str3 !="" &&  str4 == ""){
if(result && result2 && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
}
if(str2 =="" && str3 !="" &&  str4 != ""){
if(result2 && result3 && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
}
if(str2 !="" && str3 =="" &&  str4 != ""){
if(result && result3 && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
}
if(str2 !="" && str3 !="" &&  str4 != ""){
if(result && result2 && result3 && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "Correct Syntax Code";
document.getElementById("popup-1").classList.toggle("active");
}
else{
document.getElementById('checkans').innerHTML = "Wrong Syntax Code";
}
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
$(function() {
	$(".lined").linedtextarea(
		{selectedLine: 0}
	);
});
        </script>


    <div class="popup" id="popup-1">
      <div class="overlay"></div>
      <div style="margin-top:5%; margin-right:6%;"class="content">
        <h2>Congratulations!</h2>
        <h3>You gained a point.</h3>
        {!! Form::open(['action'=>['App\Http\Controllers\PhpScoringControlleradvance@store'],'method'=>'POST','class'=>'pull-right']) !!}
        {{Form::hidden('iduser',Auth::user()->id)}}
        {{Form::hidden('idquizz',$phpquizs->id)}}
        {{Form::hidden('difficulty', $phpquizs->category)}}
          {{Form::submit('Proceed',['class'=>'btn','style'=>'background-color: rgb(14, 177, 14); margin-top: 10px; padding: 12px; border-radius: 10px; color: white; font-weight: bold;'])}}
        {!! Form::close() !!}
      </div>
    </div>
    <div onclick="cond2()" id="myDIV" style="display: none; top: 50%; left: 50%; 
transform: translate(-50%, -50%); z-index: 100; position: absolute;">
{{$phpquizs->trivia}}
</div>
</body>


<style>


      .lined{
          background: url(http://i.imgur.com/2cOaJ.png);
      background-attachment: local;
      background-color:white;
      background-repeat: no-repeat;
      padding-left: 35px;
      padding-top: 10px;
      border-color:#ccc;
      }

  .popup .overlay {
position:fixed;
top:0px;
left:0px;
width:100vw;
height:100vh;
background:rgba(0,0,0,0.9);
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
height:220px;
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
</x-app-layout>