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
        <form action="/javaquiz2"><button class="unstyled-button " id="btn1" disabled><h3>Level 2</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/javaquiz3"><button class="unstyled-button " id="btn2" disabled><h3>Level 3</h3></form>
        </button>
    </div>
    <div class="button">
        <form action="/javaquiz4"><button class="unstyled-button " id="btn3" disabled><h3>Level 4</h3></form>
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
    <div style="margin-left: 215px"> 
        <div class=" container-fluid h-90">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
              
                    <div class="card text-center" style=" background-color: #fedcda; border-radius: 20px; border: solid #fed4d2;">
                        <div class="card-header">
                            <h3>Java Problem #1</h3>
                            
    <a onclick="cond2()" href="#" style="text-decoration: none; color: black; " class=" h5">&#x1F4A1;</a>
                    </div>

                    <div onclick="cond2()" id="myDIV" style="display: none; top: 50%; left: 50%; 
                    transform: translate(-50%, -50%); z-index: 100; position: absolute;" class="bg-success p-4">
                    TRIVIA: This is a symbol for asking a question!
                    </div>
                    <br>
                   
                    <h3><b><i>
                        Create a code that will display your name
                    </i></b></h3>    
                    <pre style="margin-bottom:-90px;">
                        <p style="margin-left: -305px; font-family: Courier New"> 
       public class Main {
                            public static void main(String[] args) {
                    </p>
                    </pre>
               <div class="row">
                <div class="col">
                <form action="/javaquiz2">
                <input pattern="[if\s]+[\sa-zA-Z]" type="text" style="width:400px;" title="Incorrect Pattern" id="ans" class="m-2 p-1">
                </div>
                <pre style="margin-bottom:-90px;">
                    <p style="margin-top:-40px; margin-left: -305px; font-family: Courier New"> 
                                                }
                                         }
                </p>
                </pre>
                <input type="submit">
                        </form>
               </div>
                    <div class="row">
                        <div class="col">
                            
                        </div>
                    </div>
                    
                    </div>
                    </div>
            </div>
                    <script>
                        
                    function cond2() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
            x.style.display = "block";
            } else {
            x.style.display = "none";
            }
            }
                    
                
            </script>
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
</style>
@endsection