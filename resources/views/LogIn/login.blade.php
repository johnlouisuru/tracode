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
    </head>
    <body style="background-color: #ffebea">

        <div class=" container-fluid h-100">
            <div class="row align-items-center h-100">
                <div class="col-6 mx-auto">
                  
            <div class="d-flex justify-content-center p-5 row"  style=" background-color: #fedcda; border-radius: 20px; border: solid #fed4d2;">
            <div class="col">
                <form class="was-validated">
                    
                <div class="form-group">
                    <label for="InputEmail"> Email Address </label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter Email" required>
                    <div class="valid-feedback">
                        Looks good!
                      </div>
                </div>
                <div class="form-group">
                    <label for="enterpassword">Password</label>
                    <input type="password" class="form-control" id="enterpassword" placeholder="Password" required>
                </div>
                <div class="form-group">
                <label> You don't have an account? Please <a href="/signup">click here. </a> </label>
                </div>
                <script>
                    

                function cond(){
                    var a=document.getElementById("InputEmail").value;
                    var b=document.getElementById("enterpassword").value;
                    if(a=="admin@yahoo.com" || b=="admin123"){
                        location.replace("/admin")
                    alert("You Will be redirected into admin");
                }
                else if(a=="user@yahoo.com" || b=="user123"){
                    location.replace("/profile")
                    alert("You Will be redirected into your profile");
                }
                else{
                    alert("Wrong Credentials");
                }
                }
               </script>
                
            </form>
            <button type="submit" class="btn btn-primary" onclick="cond()">Log In </button>

            
            </div>
            <div  class="col d-flex justify-content-center" style="display: flex; align-items: center;">
                <div class="row">
                <a href="/guest" style="text-decoration: none;">  <h1><img src="/img/logo.png" style="width: 50px; height: 50px;"><font color="red">Tra</font><font color="green">Code</font></h1></a>
                </div> 
            </div>
        </div>

                </div>
            </div>
        </div>
    </body>
</html>