<?php 
require '../../php/connectDatabase.php';

$id = $_POST['id'];

if(isset($_POST['id'])){
  $id = $_POST['id'];
 $query="DELETE FROM utilisateur where id=${id}";
   $statement=$pdo->prepare($query);
   $statement->execute();
   echo 1;
 }


echo 0;