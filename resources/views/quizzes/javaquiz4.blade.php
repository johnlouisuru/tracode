@extends('main.quiznav')
@section('navquiz')

<div class="sidenav">
    <div style="background-color: white;" class="row">
      <a href="/guest" style="text-decoration: none;">  <h2><img src="/img/logo.png" style="width: 30px; height: 30px; margin-left: 20px;"><font color="red">Tra</font><font color="green">Code</font></h2></a>
    </div>
    <p> Java </p>
    <div class="button">
        <form action="/javaquiz"><button class="unstyled-button"><h3>Level 1</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/javaquiz2"><button class="unstyled-button " id="btn1" ><h3>Level 2</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/javaquiz3"><button class="unstyled-button " id="btn2" ><h3>Level 3</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/javaquiz4"><button class="unstyled-button " id="btn3" ><h3>Level 4</h3></form>
        </button>
    </div><div class="button">
        <form action="/javaquiz5"><button class="unstyled-button " id="btn4" disabled><h3>Level 5</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="#"><button class="unstyled-button " id="btn5" disabled><h3>Level 6</h3></form>
        </button>
    </div>
</div>
<div class="behind_container" style="float: right; text-align: center; margin-right: 20px; padding: 3px; margin-top: 2px;">
   

</div>  
</div>
    <div style="padding-top:3%;margin-left: 215px"> 
        <div class=" container-fluid h-90">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
              
                    <div class="card text-center" style=" background-color: #fedcda; border-radius: 20px; border: solid #fed4d2;">
                        <div class="card-header">
                            <br>
                            <h3>Java Problem #4</h3>
                            
    <a onclick="cond2()" href="#" style="text-decoration: none; color: black; " class=" h5">&#x1F4A1;</a>
                    </div>

                    <div onclick="cond2()" id="myDIV" style="display: none; top: 50%; left: 50%; 
                    transform: translate(-50%, -50%); z-index: 100; position: absolute;" class="bg-success p-4">
                    TRIVIA: This is a symbol for asking a question!
                    </div>
                    <br>
                    <h3><b><i>
                        Complete the code using lower number than 10!
                    </i></b></h3>    
                    <pre style="margin-bottom:-80px;">
                        <p style="margin-left: -305px; font-family: Courier New"> 
       public class Main {
                            public static void main(String[] args) {
int a = "
                    </p>
                    </pre>
                    <div style="margin-left: -50px; margin-top:-33px">
                    <input style=" border:none; border-bottom:1px solid; background:transparent;width:150px;" title="Needs to be string value" type="text" name="value" placeholder="Number"  id="ans" class="m-2 p-1"><p style="margin-top: -36px;margin-left: 170px; font-family: Courier New"> "; </p>
                    </div>
                    <div class="row">
                <div class="col">
                    <div style ="margin-left:-230px; margin-top:-5px;">
                <input style="border:none; border-bottom:1px solid; background:transparent;width:60px;" type="text" name="answer" placeholder="symbol"  id="ans2" class="m-2 p-1"><p style="margin-left: -125px;margin-top:-35px; font-family: Courier New">if( a               
                </p>
                <p style="margin-left: 130px;margin-top:-40px; font-family: Courier New">10 ){</p>
            </div>
            
                <pre style="margin-bottom:-90px;">
                    <p style="margin-left: -410px;margin-top:-40px; font-family: Courier New"> 
                                         System.out.println("                ")
              }    
        }
     }
                </p>
                
                </pre>
                <div style ="margin-left: 50px; margin-top:-200px;">
                    <input style="border:none; border-bottom:1px solid; background:transparent;width:100px;" type="text" name="answer" placeholder="Value"  id="ans3" class="m-2 p-1">
                    </div>
                    <div class="row" style ="margin-top:30px;">
                        <div class="col"> 
                            <br>

                    <button type="submit" class="button" name="button" onclick="cond()" class="m-4"><h3>Submit</h3></button>
                
                        </div>
                    </div>
                    <div class="row">
                    </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
                    <script>
                        function cond(){
                            var a=document.getElementById("ans").value;
                            var b=document.getElementById("ans2").value;
                            var c=document.getElementById("ans3").value;
                            if(a!="" && b=="<" && a<= 10 || a!="" && b=="<=" && a<= 10 ){
                            document.getElementById("btn4").disabled = false;
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

<div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div style="margin-top:2%; margin-left:7.5%;"class="content">
      <div class="close-btn" onclick="cond()">×</div>
      <h3>Enter Next Level</h3>
      <p>Your Output is: </p>
      <div style="padding:15px;display:flex;flex-wrap:wrap; background-color: black">
      <b style="color: white; font-family:Consolas;" id="displayvalue2"></b>
      </div>
      <form action="/javaquiz5">
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