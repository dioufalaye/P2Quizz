<?php
    include("../connectDatabase.php");
    $data = [
        'userlogin' => $_POST['login'],
        'pwd'=>$_POST['login'],
        'prenom' => $_POST['prenom'],
        'nom'=>$_POST['nom']
                 
    
    ];
    
    prepared_insert($pdo, $data)

//requette preparé pour insertion
    $query = "INSERT INTO utilisateur (id, userlogin, pwd, prenom, nom) 
    VALUES ("", ". $_POST['login'].",".$_POST['prenom'].",".$_POST['nom'].")";
    $pdo->exec($query);
    

?>