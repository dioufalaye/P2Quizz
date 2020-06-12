$(document).ready(function () {
    $('#creatAccount').click(function (e) { 
       
     
        var loginHelp='';
        var pwdHelp='';
        var pwdConfirmHelp='';
        var prenomHelp='';
        var  nomHelp='';
        var avatarHelp='';
        //valider login
        if($.trim($('#login').val()).length==0)
        {
            e.preventDefault(); 
            loginHelp="Login is required";
            $('#loginHelp').text(loginHelp);
            
        }
        else{
            loginHelp="";
            $('#loginHelp').text(loginHelp);
        }

        //valider password
        if($.trim($('#pwd').val()).length==0)
        {
            e.preventDefault();
            pwdHelp="password is required";
            $('#pwdHelp').text(pwdHelp);
           
        }
        else{
            pwdHelp="";
            $('#pwdHelp').text(pwdHelp);
        }
        ///confirmation pass
        if($.trim($('#pwdConfirm').val()).length==0)
        {
            
            pwdConfirmHelp="password confirmation is reqired and must be identique with your password";
            $('#pwdConfirmHelp').text(pwdConfirmHelp);
        }
        else{
            pwdConfirmHelp='';
            $('#pwdConfirmHelp').text(pwdConfirmHelp);
        }
        if(!$.trim($('#pwdConfirm').val()===$.trim($('#pwd').val())))
        {
            e.preventDefault()
            pwdConfirmHelp="password confirmation is reqired and must be identique with your password";
            $('#pwdConfirmHelp').text(pwdConfirmHelp);

            

        }
        //prenom validerprenom
        if($.trim($('#prenom').val()).length==0)
        {
            
            prenomHelp="firstname is reqired ";
            $('#prenomHelp').text(prenomHelp);
            e.preventDefault();
        }
        else{
            prenomHelp='';
            $('#prenomHelp').text(prenomHelp);
        }
         //nom validernom
         if($.trim($('#nom').val()).length==0)
         {
             
            nomHelp="Lastname is reqired ";
             $('#nomHelp').text(nomHelp);
             e.preventDefault();
         }
         else{
            nomHelp='';
            $('#nomHelp').text(nomHelp);
            $('#nomHelp').text(nomHelp);
        }


    });
    //partie ajax;
    console.log('clic')
    $('#registerForm').submit(function(e)
    {console.log('clic')
        e.preventDefault()
        console.log('clic')
        const login = $('#login').val();
        const pwd = $('#pwd').val();
        const prenom = $('#prenom').val();
        const nom = $('#nom').val();
        const avatar = $('#avatar').val();
        console.log('clic')
        $.ajax({
           
            type: "POST",
            url: "../php/validerInscription.php",
            data: {
                userlogin:login,
                pwd:pwd,
                prenom:prenom,
                nom:nom,
                avatar:avatar
            },
            //dataType: "dataType",
            
            success: function (response) {
                $('html').html(response)
               
            }
        });
        
        
  });

});