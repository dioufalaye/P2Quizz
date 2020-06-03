
<!doctype html>
<html lang="en">
  <head>
    <title>Inscrition</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!----------Cssmine ----------->
    <link rel="stylesheet" href="../../asset/css/style.css">
    <!---------------------------Jquery mine---------------------->
  
    
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <div class="bg">
       <!------header----->
       <div class="jumbotron jumbotron-fluid py-0 " id="entete" style="background:rgba(148, 199, 169, 0.6);">
         <div class=" d-flex justify-content-between">
           <h1 class="col-2 display-5 px-5 d-flex align-items-center text-light text-white" id="kayfoo">
             kayffoo
           </h1>
          <div class="row">

            
          <div class="col-10 ">
               
            <img src="..\..\asset\img\Images\logo-QuizzSA.png" class="col-2  img-fluid justify-content-right" alt="Responsive image">

          </div>
          </div>
         </div>
       </div>
        <!----------------------------Contenu-->
        <div class="container-fluid" >
          
        <div class="justify-content-center w-50 py-0 mx-auto px-0" style="width: 50%; background-color:chartreuse;" id="connect">
        <div class="" >
            <div>
             <div class="">
                 <img src="" class=" col-4 py-5 rounded-circle bg-white float-right mx-auto d-block justify-content-right " alt="Cinque Terre">
                 </div>
            <div class="col-8 text-align-right ">
                <form action="" role="form" method="POST">
                    <h3 class="text-white ">Inscription</h3>
                    <div class="form-group">
                        <label class="text-white" for="login">Login</label>
                        <input type="text" name="userlogin" id="login" class="form-control" placeholder="Login" aria-describedby="helpId">
                        <small id="loginHelp" class="text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="pwd">Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" aria-describedby="helpId">
                        <small id="pwdHelp" class="text-muted"></small>
                    </div>  
                    <div class="form-group">
                        <label class="text-white" for="pwdConfirm">Confirm Password</label>
                        <input type="password" name="pwdConfirm" id="pwdConfirm" class="form-control" placeholder="Confirm Password" aria-describedby="helpId">
                        <small id="pwdConfirmHelp" class="text-muted"></small>
                    </div>  
                    <div class="form-group">
                        <label class="text-white" for="prenom">Prenom</label>
                        <input type="text" name="userlogin" id="prenom" class="form-control" placeholder="Prenom" aria-describedby="helpId">
                        <small id="prenomHelp" class="text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" aria-describedby="helpId">
                        <small id="nomHelp" class="text-muted"></small>
                    </div>

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" aria-describedby="inputGroupFileAddon04">
                           <label class="custom-file-label" for="avatar">Choose file</label> 
                           <small id="avatarHelp" class="text-muted"></small>
                        </div>
                    </div>
                <div>
                        <button type="button" class="btn btn-primary" name="creatAccount" value="creatAccount" id="creatAccount">Creat</button>  
                      
                </div>   
                </form>
            </div>
        </div>
    </div>
          
        </div>

       <!--------------------Fin--------Contenu
        <div class="card-footer text-center p-0 align-self-end fixed-bottom py-0 text" style="background-color:#94C7A9" id="footer" >
            <h1 class=" w-25 py-0 mx-auto  text-align-center display-5 d-inline-block d-flex text-center align-items-center text-light text-white text-center">@dioufalayeDataDev</h1>
         </div>
      
     </div>
-->
   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!---------------------______________JQueryCode______________----------------->
  
  
  </body>
</html>
<script >
    $(document).ready(function () 
      {
         
       
      alert("bandy");
      $("#creatAccount").click(function(){
           
            
           var errorLogin='';
           var errorPass='';

           var errorConfirmPass='';
           var errorPrenom='';
           var erreurNom='';
           var filterlogPass=/[a-zA-Z0-9]{2,25}/;
           //var filterNom=/[a-zA-Z]{2,25}/;
           if($.trim($('#login').val()).length==0)
           {
               alert("layediouf");
               errorLogin="Login is required";
               $('#loginHelp').text(errorLogin);
           }
           else
           {
               if(!filterlogPass.test($('#login').val()))
               {
                   errorLogin="Invalid login";
               $('#loginHelp').text(errorLogin);
               }
               else
               {
                   errorLogin='';
                   $('#helpLog').text(errorLogin);
                   
               }

           }
          
            //validerpassword
            if($.trim($('#pwd').val()).length==0)
                   {
                       alert("layediouf");
                       errorPass="Password is required";
                       $('#pwdHelp').text(errorPass);
                   }
                   else
                   {
                       if(!filterlogPass.test($('#pwd').val()))
                       {
                           errorPass="Invalid password";
                       $('#pwdHelp').text(errorPass);
                       }
                       else
                       {
                           errorPass='';
                           $('#pwdHelp').text(errorPass);
                           //passage ajax
                          

                       }

                   }
                   //confimr pass
                   if($.trim($('#pwdConfirm').val()).length==0)
                   {
                       alert("layediouf");
                       errorPass=" Confirmation Password is required";
                       $('#pwdConfirmHelp').text(errorPass);
                   }
                   else
                   {
                       if(!filterlogPass.test($('#pwdConfirm').val()))
                       {
                           errorPass="Invalid password";
                       $('#pwdConfirmHelp').text(errorPass);
                       }
                       else
                       {
                           errorPass='';
                           $('#pwdConfirmHelp').text(errorPass);
                           //passage ajax
                          

                       }

                   }
                   //egalité password
                   if (!$("#pwd").val() ===$("#pwdConfirm").val()){
                    alert("c'est pas identique");
                   }
                   else{
                       alert("go");
                   }
           
           

       });
     });
   
  
    
  </script>