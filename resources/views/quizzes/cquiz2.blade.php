
@extends('main.quiznav')
@section('navquiz')

<div class="sidenav">
    <div style="background-color: white;" class="row">
      <a href="/guest" style="text-decoration: none;">  <h2><img src="/img/logo.png" style="width: 30px; height: 30px; margin-left: 20px;"><font color="red">Tra</font><font color="green">Code</font></h2></a>
    </div>
    <p> <P>C#</P> </p>
    <div class="button">
        <form action="/cquiz"><button class="unstyled-button"><h3>Level 1</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/cquiz"><button class="unstyled-button " id="btn1" ><h3>Level 2</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/cquiz3"><button class="unstyled-button " id="btn2" disabled><h3>Level 3</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/cquiz4"><button class="unstyled-button " id="btn3" disabled><h3>Level 4</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/cquiz5"><button class="unstyled-button " id="btn4" disabled><h3>Level 5</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="#"><button class="unstyled-button " id="btn5" disabled><h3>Level 6</h3></form>
        </button>
    </div>
</div>
    <div style=" padding-top:1%; margin-left: 215px"> 
        <div class=" container-fluid h-90">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
              
                    <div class="card text-center" style=" background-color: #fedcda; border-radius: 20px; border: solid #fed4d2;">
                        <div class="card-header">
                            <h3>C# Problem #2</h3>
                            <a onclick="cond2()" href="#" style="text-decoration: none; color: black; " class=" h5">&#x1F4A1;</a>
                                </div>
                                <h3><b><i>
                                    Complete the code using write function
                                </i></b></h3>
                                <pre style="margin-top:-40px;">
                                    <p style="margin-left: -605px; font-family: Courier New"> 
                                        
                                      using System;

                                        namespace     
                          {
                                        class Program
                          {
                                                          static void Main(string[] args)
                          {

                                                                    Console.                   ("                ")
                                                  
                                    }
                                }
                            }
                                </p>
                                </pre>
                                <div style="margin-top:-55%; margin-left: -22%;">
                                    <p style="margin-left: 30px; margin-top:-68px; font-family: Courier New"><input style="border:none; border-bottom:1px solid; background:transparent;width:150px;" type="text" placeholder="File Name"  id="ans1" class="m-2 p-1">
                                </div>
                                <div style="margin-top:27%; margin-left: -36%;">
                                    <p style="margin-left: 30px; margin-top:-68px; font-family: Courier New"><input style="border:none; border-bottom:1px solid; background:transparent;width:130px;" type="text" placeholder="Function"  id="ans2" class="m-2 p-1">
                                </div>
                                <div style="margin-top:-0.1%; margin-left: 23%;">
                                    <p style="margin-left: 30px; margin-top:-68px; font-family: Courier New"><input style="border:none; border-bottom:1px solid; background:transparent;width:100px;" type="text" placeholder="Display"  id="ans3" class="m-2 p-1">
                                </div>
                                <div style="margin-top:12%;" class="col"> 
                                <br>
                                <button type="submit" class="button" name="button" onclick="cond()" class="m-4"><h3>Submit</h3></button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


                    <script>
                        
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
            </script>
<div onclick="cond2()" id="myDIV" style="display: none; top: 50%; left: 58%; 
transform: translate(-50%, -50%); z-index: 100; position: absolute;" class="bg-success p-4">
TRIVIA: This is a symbol for asking a question!
</div>

            <div class="popup" id="popup-1">
                <div class="overlay"></div>
                <div style="margin-top:2%; margin-left:7.5%;"class="content">
                  <div class="close-btn" onclick="cond()">×</div>
                  <h3>Enter Next Level</h3>
                  <p>Your Output is: </p>
                  <div style="padding:15px;display:flex;flex-wrap:wrap; background-color: black">
                  <b style="color: white; font-family:Consolas;" id="displayvalue2"></b>
                  </div>
                  <form action="/cquiz3">
                    <button class="button" type="submit"> Proceed
                    </button>
                  </form>
                </div>
              </div>
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
@endsection




