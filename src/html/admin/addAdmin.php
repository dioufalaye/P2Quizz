<div class="justify-content-center w-50 py-0 mx-auto px-0" style="width: 50%; background-color:chartreuse;" id="connect">
        <div class="" >
            <div>
             <div class="">
                 <img src="" class=" col-4 py-5 rounded-circle bg-white float-right mx-auto d-block justify-content-right " alt="Cinque Terre" id="photo">
                 </div>
            <div class="col-8 text-align-right ">
                <form action="" role="form" method="POST" id="registerForm"  enctype="multipart/form-data">
                    <h3 class="text-white ">Add admin</h3>
                    <div class="form-group">
                        <label class="text-white" for="login">Login</label>
                        <input type="text" name="userlogin" id="login" class="form-control" placeholder="Login" aria-describedby="helpId">
                        <small id="loginHelp" class="text-white text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="pwd">Password</label>
                        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" aria-describedby="helpId">
                        <small id="pwdHelp" class="text-muted text-white "></small>
                    </div>  
                    <div class="form-group">
                        <label class="text-white" for="pwdConfirm">Confirm Password</label>
                        <input type="password" name="pwdConfirm" id="pwdConfirm" class="form-control" placeholder="Confirm Password" aria-describedby="helpId">
                        <small id="pwdConfirmHelp" class="text-muted text-white"></small>
                    </div>  
                    <div class="form-group">
                        <label class="text-white" for="prenom">Prenom</label>
                        <input type="text" name="userlogin" id="prenom" class="form-control" placeholder="Prenom" aria-describedby="helpId">
                        <small id="prenomHelp" class="text-muted text-white"></small>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" aria-describedby="helpId">
                        <small id="nomHelp" class="text-muted text-white"></small>
                    </div>

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar" aria-describedby="inputGroupFileAddon04"
                            onchange="document.getElementById('photo').src=window.URL.createObjectURL(this.files[0])">
                           <label class="custom-file-label" for="avatar">Choose file</label> 
                           <small id="avatarHelp" class="text-muted text-white"></small>
                        </div>
                    </div>
                <div>
                        <button type="submit" class="btn btn-primary" name="creatAccount" value="creatAccount" id="creatAccount">Creat</button>  
                      
                </div>   
                </form>
            </div>
        </div>
    </div>
<script>
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
            url: "validerAdmin.php",
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
</script>