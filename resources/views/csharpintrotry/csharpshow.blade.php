<x-app-layout x-data="{ open: false }">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="/css/navreg.css" rel="stylesheet">
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
 
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <x-nav-link :href="route('csharpintrotry.csharpintro')" :active="request()->routeIs('csharpintrotry.csharpintro')">
          {{ __('Introduction') }}
      </x-nav-link>
      <x-nav-link :href="route('csharpbasictry.csharpbasic')" :active="request()->routeIs('csharpbasictry.csharpbasic')">
          {{ __('Basic') }}
      </x-nav-link>
      <x-nav-link :href="route('csharpintermediatetry.csharpintermediate')" :active="request()->routeIs('csharpintermediatetry.csharpintermediate')">
        {{ __('Intermediate') }}
    </x-nav-link>
    <x-nav-link :href="route('csharpadvancetry.csharpadvance')" :active="request()->routeIs('javaadvancetry.javaadvance')">
      {{ __('Advanced') }}
  </x-nav-link>
    </h2>
    </x-slot>
    <body style="background-color: #90ebf0">
      <div class="container">
        <div style="z-index: 100;margin-top: -13%;">
          <div class="card m-4" style="background-color: transparent; border: none!important;">
            <div class="card-body" style="background-color: #ffbf00; margin-top: 5%;border: 1px solid black; ">
                <center><h1>{{$csharps->title}}</h1></center>
            </div>
            <div class="card-body bg-white" style="border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; ">
              <pre style=" border: none!important; border-radius: 0%; color: black;">{{$csharps->body}}</pre>
            </div>
            <div style="margin-top: 3%">
            <center><img style="display: none" onload="this.style.display=''" src="/storage/{{$csharps->filename}}" alt="" width="60%" height="mx-auto"/></center>
            </div>
      </div>
      </div>
      </div>

      <div style="margin-left: 13%;margin-top:-8%">
        <h5>Try the codes here</h5>
        <textarea id="source" class="lined" spellcheck="false" style=" width: calc(53% - 8px);" rows="15" placeholder="Enter Syntax Code Here" >
  using System;

    namespace HelloWorld
      {
        class Program
          {
          static void Main(string[] args)
            {
                {{$csharps->codes}}
            }
          }
        }
  </textarea>
    <br>
        <select id="lang" hidden>
            <option>C#</option>
        </select>
      <button id="run" style="border: solid;" onclick="run()">▶️ Run &nbsp;</button><br><br>
      
        <textarea id="input" style="width: calc(53% - 8px);" placeholder="Input Value here If Needed" ></textarea>
        <textarea readonly id="output" style=" margin-top: -50%; width: 30%; background-color: black; color: white; padding-bottom:3.9%" rows="15" placeholder="This will display the output of your code" ></textarea>
      </div>
          <script type="text/javascript">
            API_KEY = "9c4f586179mshd775fa76ebd5504p148615jsnfcc295f57031";
      
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
            
            $(function() {
$(".lined").linedtextarea(
{selectedLine: 0}
    );
}); 

        </script>
    
</body>
</x-app-layout>