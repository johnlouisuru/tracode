<!DOCTYPE html>
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
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script src="{{url('js/jquery-linedtextarea.js')}}"></script>
    <link href="{{url('css/jquery-linedtextarea.css')}}" type="text/css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo.png" type="image/png" sizes="16x16">
    <style>
        body { background-color: #fafafa; }
        .container { margin: 150px auto; max-width: 960px; }
      </style>
    </head>
    <body style="background-color: #90ebf0;">
        <div class="sidenav">
            <p> <a href="/phpintroguest" style="color: #ffbf00; text-decoration: none !important;"> PHP </a></p>
            <a class="nav" href="/phpbasicguest">Basic Codes</a>
            <a class="nav" href="/phpinterguest">Intermediate Code</a>
            <a class="nav" href="/phpadvaguest">Advanced Code</a>
            <p> <a href="/javaintro" style="color: #ffbf00; text-decoration: none !important;">Java </a></p>
            <a class="nav" href="/javabasicguest">Basic Codes</a>
            <a class="nav" href="/javainterguest">Intermediate Code</a>
            <a class="nav" href="/javaadvaguest">Advanced Code</a>
            <p><a href="/cintro" style="color: #ffbf00; text-decoration: none !important;"> C# </a></p>
            <a class="nav" href="/csharpbasicguest">Basic Codes</a>
            <a class="nav" href="/csharpinterguest">Intermediate Code</a>
            <a class="nav" href="/csharpadvaguest">Advanced Code</a>
        </div>
        <div id="try" class="topnav">
            <a href="/homepage"><img src="/storage/logonav1.png" width="200px" height="10%" style="float: left; margin-top: -1.5%; margin-left: 0.5%;"></a>
            <form action="/login"> <button class="logintry" style="margin-left:70%;"> <h5>Log In </h5></button></form>
        </div> 
    <div class="main front">
        <br><br>
        
<div class="container">
    <div style="z-index: 100;margin-top: -10%">
        <div class="card m-4" style="background-color: transparent; border: none!important;" >
            <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid black; ">
                    <center><h1>{{$javatabs->title}}</h1></center>
                </div>
                <div class="card-body bg-white" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; ">
                    <pre style=" border: none!important; border-radius: 0%; color: black;">{{$javatabs->body}}</pre>
                </div>
              <div style="margin-top: 3%;">
              <center><img style="display: none" onload="this.style.display=''" src="/storage/{{$javatabs->filename}}" alt="" width="60%" height="mx-auto"/>
              </center>
            </div>
        </div>
    </div>
</div>
</div>
    <div style="margin-left: 27%; margin-top: -8%;">
        <h5>Try the codes here</h5>
        <textarea id="source" class="lined" style=" width: calc(53% - 8px);" rows="15" spellcheck="false" placeholder="Enter Syntax Code Here" >
  public class Main {
    public static void main(String[] args) {
    System.out.print("Hello Tracoders");
        }
    }
              
  </textarea>
      <br>
        <select id="lang" hidden>
            <option>Java</option>
        </select>
      <button id="run" onclick="run()">▶️ Run &nbsp;</button><br><br>
      
        <textarea id="input" style="width: calc(53% - 8px);" placeholder="Input Value here If Needed" ></textarea>
        <textarea readonly id="output" style=" margin-top: -50%; width: 30%; background-color: black; color: white;padding-bottom:3%" rows="15" placeholder="This will display the output of your code" ></textarea>
      </div>
          <script type="text/javascript">
            API_KEY = "8148214a11msh1f2e84958b56b8fp187bc6jsn73d0f81062cd";
      
            var language_to_id = {
                "C#": 51,
                "Java": 62,
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

            $(function() {
$(".lined").linedtextarea(
{selectedLine: 0}
    );
}); 
        </script>
  </body>
  </html>