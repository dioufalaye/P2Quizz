
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a class="btn btn-primary" href="src/azz.php" role="button">Creat acount</a>
               </div>   
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script >

    $(document).ready(function () 
      {
         
       
        $("#connect").click(function(){
           
            
            var errorLogin='';
            var errorPass='';
            var errorConfirmPass='';
            var errorPrenom='';
            var erreurNom='';
            var filterlogPass=/[a-zA-Z0-9]{2,25}/;
            //var filterNom=/[a-zA-Z]{2,25}/;
            if($.trim($('#login').val()).length==0)
            {
               
                errorLogin="Login is required";
                $('#helpLog').text(errorLogin);
            }
            else
            {
                if(!filterlogPass.test($('#login').val()))
                {
                    errorLogin="Invalid login";
                $('#helpLog').text(errorLogin);
                }
                else
                {
                    errorLogin='';
                    $('#helpLog').text(errorLogin);
                     //validerpassword
                    if($.trim($('#pwd').val()).length==0)
                    {
                      
                        errorPass="Password is required";
                        $('#helppass').text(errorPass);
                    }
                    else
                    {
                        if(!filterlogPass.test($('#pwd').val()))
                        {
                            errorPass="Invalid password";
                        $('#helppass').text(errorPass);
                        }
                        else
                        {
                            errorPass='';
                            $('#helppass').text(errorPass);
                            //passage ajax
                           

                        }

                    }
                }

            }
           

            
            

        });
     }); alerte("samdi");
     //----------------------------------
     $(document).ready(function() {  
         alerte("samdi");               
    $("#loginForm").submit(function(e){
      e.preventDefault();
      $.ajax({
      url:'../php/validerconnexion.php',
      type:'POST',
      data: {pwd:$("#userlogin").val(), pwd:$("#pwd").val()},
      success: function(resp) {
         if(resp == "invalid") {
          $("#helppass").html("Invalid username and password!");  
         } else {
          window.location.href= resp;
         }
      }
     });
  });
})


     //------------------------------------------
     /*$(document).ready(function() {

$('#connection').submit(function() {
    alert("bandit");

    $.ajax({
        type: "POST",
        url: "traitement/validerConnexion.php",
        data: {
            userlogin: $("#login").val(),
            pwd: $("#pwd").val()
        },
        success: function(data)
        {
            alert("bandit");
            if (data === 'success') {
                alert("bandit");
                window.location.replace('traitement/validerConnexion.php');
            }
            else {
                alert(data);
            }
        }
       
    });
    //this is mandatory other wise your from will be submitted.
    window.location.replace('../index2.php');
    return false; 
});

});*/
     
  
    
  </script>