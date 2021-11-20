
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
          {{ __('Java Quiz') }}
       
        <div class="float-right">
          Java Score: {{Auth::user()->javascore}}
            </div>
      </nav>
  </x-slot>

  <body onload="editpop()" style="background-color: #90ebf0">
    
          <script type="text/javascript">
            API_KEY = "dae090bdc8msh746a341bfe254f7p102669jsn0c3f26f40fc6";
      
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
var reg = new RegExp(str2.value, "i");
var result = str.value.match(reg);
var out = document.getElementById('output');
if(result && out.value.includes("Accepted") ){
document.getElementById('checkans').innerHTML = "correct syntax code";

}
else{
document.getElementById('checkans').innerHTML = "wrong cyntax code";
}
}

function editpop(){
  document.getElementById("popup-1").classList.toggle("active");
}

        </script>
       <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div style="margin-top:5%; margin-right: 6%;"class="content">
          <h2>You will now redirect to the question list.</h2>
          {!! Form::open(['action'=>['App\Http\Controllers\Quizzesjava@update',Auth::user()->id],'method'=>'POST','class'=>'pull-right', 'onclick'=>'editpop()']) !!}
                {{Form::hidden('idquizz',$id)}}
                {{Form::hidden('_method', 'PUT')}}
                  {{Form::submit('Proceed',['class'=>'btn','style'=>'background-color: rgb(14, 177, 14); margin-top: 10px; padding: 12px; border-radius: 10px; color: white; font-weight: bold;'])}}
                {!! Form::close() !!}
        </div>
      </div>

    
</body>


<style>
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