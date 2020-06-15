<?php
   //  //existance Login
   //  function emailExists($pdo, $email)
   //   {
   //      $stmt = $pdo->prepare("SELECT 1 FROM utilisateur WHERE login=?");
   //      $stmt->execute([$email]); 
   //      return $stmt->fetchColumn();
   //   }
        
   /*
    if (emailExists($pdo, $email))
     {
            // found
    }
    */
    function photo(){
      if(isset($_FILES['avatar'])){
      $name= $_FILES['avatar']['name'];
      $tmp_name= $_FILES['avatar']['tmp_name'];
      $local= "../../asset/img/avatar/";
  }
   return move_uploaded_file($tmp_name, $local.$name);
  }
    ?>    