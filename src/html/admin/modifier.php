<?php
require '../../php/connectDatabase.php';




if (isset($_POST['firstname']) and isset($_POST['lastname'])){
    
    $id= $_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    if (!empty($firstname)and !empty($lastname)){
        $req=$pdo->query("UPDATE utilisateur set PRENOM='$firstname' , NOM='$lastname'
where id='$id'");
    }
    if ($req->rowCount()>0){
        echo 'ok';
    }
    else{
        echo 'bonjour';
    }
}


