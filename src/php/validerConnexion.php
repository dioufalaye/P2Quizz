<?php
    session_start();

    include('connectDatabase.php');
    if(isset($_POST['userlogin']) && $_POST['userlogin'] != '' && isset($_POST['pwd']) && $_POST['pwd'] != '')
    {    
      $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE userlogin = ? and PWD= ?");
      $stmt->execute(array($_POST['userlogin'],$_POST['pwd']));
      $utilisateur = $stmt->fetch();
      $userRole=$utilisateur['ROLE'];
      $_SESSION['id']=$utilisateur['id'];
      $_SESSION['userlogin']=$utilisateur['userlogin'];
      $_SESSION['PRENOM']=$utilisateur['PRENOM'];
      $_SESSION['NOM']=$utilisateur['NOM'];
      if ($userRole=="admin")
      {
        header('location:../html/admin.php');
      } elseif($userRole=="joueur")
       {
        header('location:../html/joueur.php');
      }else{
        header('location:index.php');
      }
    }
  
    


?>