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
  $("#loginForm").submit(function(e)
{
    e.preventDefault()
    console.log('clic')
    const login = $('#login').val();
    const pwd = $('#pwd').val();

    $.ajax({
        type: "POST",
        url: "src/php/validerConnexion.php",
        data: {
            userlogin:login,
            pwd:pwd
        },
        //dataType: "dataType",
        beforeSend:function(){
            alert('login');
        },
        success: function (response) {
            console.log('response')
        }
    });
    window.location.replace('src/php/validerConnexion.php');
    

});
}); 
//----------------------------------

