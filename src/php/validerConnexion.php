<?php
    include('connectDatabase.php');
  if(isset($_POST['userlogin']) && $_POST['userlogin'] != '' && isset($_POST['pwd']) && $_POST['pwd'] != '')
  {
        
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE userlogin = ? and PWD=?");
    $stmt->execute(array($_POST['userlogin'],$_POST['pwd']));
    $utilisateur = $stmt->fetch();
    $userRole=$utilisateur['ROLE'];

    if ($userRole=="admin")
    {
      require ('src/html/admin.php');
       echo 'admin';
    } elseif($userRole=="joueur") 
    {
      require ('src/html/joueur.php');
    } else{
      require ('index.php');
    }
  }

  
    


?>