<?php
 include("../../php/connectDatabase.php");
global $pdo ;

      if ($_POST) {
          $question = $_POST['question'];
          $point = $_POST['point'];
          $chx = $_POST['chx'];
          $reponses = $_POST['response'];
          $choice =  $_POST['choice'];
          $Ques = ['question'=> $question,'point'=>$point,'chx'=>$chx,'reponses'=>$reponses,'bon_reep'=>$choice];

          ///
            
        $respon= $pdo->prepare('INSERT INTO `bdquizz`.questions (question, score,choix)
        VALUES ( :question, :point,:chx)');
                $respon->execute(array(
                    
                    'question'=> $question,
                    'point'=>$point,
                    'chx'=>$chx
                ));
          ///  
          $dernier=$pdo->lastInsertId();
          
          for ($i=0; $i <count($reponses) ; $i++) { 
              $rep = $reponses[$i];
              $etat = 0;
              if (in_array($rep,$choice )) {
                  $etat = 1;
              }
              
              $req= $pdo->prepare('INSERT INTO  `bdquizz`.reponses (reponse,idQues,etat)
VALUES (:reponse, :idQ,:etat)');
          $req->execute(array(
              
              'reponse'=>$rep,
              'idQ'=>$dernier,
              'etat'=>$etat
          ));
          }
          echo json_encode($Ques);


      }
?>