<?php
    include('../connectDatabase.php');
  if(isset($_POST['userlogin']) && $_POST['userlogin'] != '' && isset($_POST['pwd']) && $_POST['pwd'] != '')
  {
        
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE userlogin = ? and pwd=?");
    $stmt->execute(array($_POST['userlogin'],$_POST['pwd']));
    $utilisateur = $stmt->fetch();
    $userRole=$utilisateur['role'];

    if ($userRole=="admin")
    {
        header('location:../admin.php');
    } else {
        header('location:user.php');
    }
  }

  
    


?>