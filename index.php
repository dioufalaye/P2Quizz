
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!----------Cssmine ----------->
    <link rel="stylesheet" href="asset/css/style.css">
    
  </head>
  <body>
    
     <div class="bg">
       <!------header----->
       <div class="jumbotron jumbotron-fluid py-0 " id="entete" style="background:rgba(148, 199, 169, 0.6);">
         <div class=" d-flex justify-content-between">
           <h1 class="col-2 display-5 px-5 d-flex align-items-center text-light text-white" id="kayfoo">
             kayffoo
           </h1>
          <div class="row">
          <div class="col-2 ">
            <img src="asset\img\Images\logo-QuizzSA.png" class="img-fluid" alt="Responsive image">
          </div>
          </div>
         </div>
       </div>
        <!----------------------------Contenu-->
        <div class="container-fluid" >
        <div class="w-25 zgpy-3 mx-auto" style="width: 50%; background-color:chartreuse;" id="connect">
    <div class="" >
        <div class="col ">
            <form action="" role="form" method="POST" id="loginForm">
                <h3 class="text-white ">Connect Page</h3>
                <div class="form-group">
                    <label class="text-white" for="login">Login</label>
                    <input type="text" name="userlogin" id="login" class="form-control" placeholder="Login" aria-describedby="helpId">
                    <small id="helpLog" class="text-muted text-danger bg-danger"></small>
                </div>
              
                <div class="form-group">
                    <label class="text-white" for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" aria-describedby="helpId">
                    <small id="helppass" class="text-muted text-danger bg-danger"></small>
                </div>  
               <div>
                    <button type="submit" class="btn btn-primary" id="connection" name="connect" >Sign In</button>  
                    <a class="btn btn-primary" href="src/html/inscription.php" role="button">Creat acount</a>
               </div>   
            </form>
        </div>
    </div>
</div>
          
        </div>

       <!--------------------Fin--------Contenu-->
        <div class="card-footer text-center align-self-end fixed-bottom py-0 text" style="background-color:#94C7A9" id="footer" >
            <h1 class="  w-25 py-0 mx-auto text-align-center display-5 d-inline-block d-flex align-items-center text-light text-white text-center">@dioufalayeDataDev</h1>
         </div>
      
     </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="asset/js/script.js">
    
 </script>
  </body>
</html>