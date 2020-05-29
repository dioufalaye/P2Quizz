<?php
    require_once('src/connectDatabase.php');
     
   if($connection=true)
   {
        if(isset($_POST['connect']))
        {
            if(empty($_POST['login']) || empty($_POST['pwd']) )
            {
                $affiche='<label>All fields are required <label>';
            }
            else
            {
                $query="SELECT * FROM utilisateur where login=:login and pwd:=pwd";
            }
        }
   }
    
?>
<div class="w-25 py-3 mx-auto" style="width: 50%; background-color:chartreuse;" id="connect">
    <div class="" >
        <div class="col ">
            <form action="" role="form">
                <h3 class="text-white ">Connect Page</h3>
                <div class="form-group">
                    <label class="text-white" for="login">Login</label>
                    <input type="text" name="login" id="login" class="form-control" placeholder="Login" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
                <div class="form-group">
                    <label class="text-white" for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>  
               <div>
                    <button type="button" class="btn btn-primary" name="connect" value="connect">Sign In</button>  
                    <a class="btn btn-primary" href="www.google.sn" role="button">Creat acount</a>
               </div>   
            </form>
        </div>
    </div>
</div>