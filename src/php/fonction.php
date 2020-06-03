<?php
    //existance Login
    function emailExists($pdo, $email)
     {
        $stmt = $pdo->prepare("SELECT 1 FROM utilisateur WHERE login=?");
        $stmt->execute([$email]); 
        return $stmt->fetchColumn();
     }
        
   /*
    if (emailExists($pdo, $email))
     {
            // found
    }
    */
    ?>    