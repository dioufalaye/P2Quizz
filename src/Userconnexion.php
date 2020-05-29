<?php
    require_once('src/connectDatabase.php');
     
   
   
        if(isset($_POST['connect']))
        {
          
            if(empty($_POST['userlogin']) || empty($_POST['pwd']) )
            {
                $affiche='<label>All fields are required <label>';
            }
            else
            {
               $login=$_POST['userlogin'];
                $pwd=$_POST['pwd'];
                $req = $myPDO->prepare("SELECT * FROM utilisateur where login =? and pwd = ?");
                $req->execute( array( $login ,$pwd) );
                $count= $req->rowCount();
                echo $count."    est js sai pas";
                echo "wel1";
                if($count>0)
                {

                    $member=$statement->fetch();
                    $_SESSION['login']= $member['login'];
                    $_SESSION['password']= $member['pwd'];
                    $_SESSION['prenom']= $member['prenom'];
                    $_SESSION['nom']= $member['nom'];
                    $_SESSION['image']= $member['image'];
                    $_SESSION['role']= $member['role'];
                   if ( $_SESSION['role']=="joueur")
                    {
                         header('location:www.facebook.com');
                    }
                   else
                   {
                         header('location:www.igfm.sn');
                   }

                    
                }else
                {
                    echo"revois tes infos";
                }
                
            }
        }
   
    
?>
<div class="w-25 py-3 mx-auto" style="width: 50%; background-color:chartreuse;" id="connect">
    <div class="" >
        <div class="col ">
            <form action="" role="form" method="POST">
                <h3 class="text-white ">Connect Page</h3>
                <div class="form-group">
                    <label class="text-white" for="login">Login</label>
                    <input type="text" name="userlogin" id="login" class="form-control" placeholder="Login" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>
                <div class="form-group">
                    <label class="text-white" for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password" aria-describedby="helpId">
                    <small id="helpId" class="text-muted"></small>
                </div>  
               <div>
                    <button type="submit" class="btn btn-primary" name="connect" value="connect">Sign In</button>  
                    <a class="btn btn-primary" href="www.google.sn" role="button">Creat acount</a>
               </div>   
            </form>
        </div>
    </div>
</div>