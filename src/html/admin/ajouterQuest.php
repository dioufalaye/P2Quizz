<?php

if (isset($_POST['question']) and isset($_POST['point'])and isset($_POST['type'])and isset($_POST['reponses'])){
    $question= $_POST['question'];
    $point= $_POST['point'];
    $type= $_POST['type'];
    $reponses= $_POST['reponses'];

    if (!empty($question) and !empty($point)and !empty($type)and !empty($reponses)){

        $response= $pdo->prepare('INSERT INTO `bdquizz`.questions (question, score,choix)
VALUES ( :question, :point,:type)');
        $response->execute(array(
            
            'question'=>$question,
            'point'=>$point,
            'type'=>$type
        ));
      if ($response){
          $req= $pdo->prepare('INSERT INTO  `bdquizz`.reponses (reponse,idQues)
VALUES (:reponse, :idQ)');
          $req->execute(array(
              
              'reponse'=>$reponses,
              'idQ'=>$pdo->lastInsertId()
          ));
      }

if ($response){
    echo 'ok';
}
        $response->closeCursor();
    }

}