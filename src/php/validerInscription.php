<?php
session_start();
include('connectDatabase.php');
global $db;
$message='';
    if(isset($_POST['userlogin']) && $_POST['userlogin'] != '' && isset($_POST['pwd']) && $_POST['pwd'] != '' 
    && isset($_POST['prenom'])
    && $_POST['prenom']!='' && isset($_POST['nom']) && $_POST['nom']!='')
    
    {
        
      $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE userlogin = ?");
      $stmt->execute(array($_POST['userlogin']));
      $utilisateur = $stmt->fetch();
      var_dump($utilisateur);
      if($utilisateur['userlogin']===$_POST['userlogin'])
      {
          $message="login existance";
          echo $message;
      }
      else{
        $sql = "INSERT INTO utilisateur (id,userlogin, pwd, prenom, nom, photo, role) VALUES (NULL,?,?,?,?,?,?)";
        $pdo->prepare($sql)->execute([$_POST['userlogin'],$_POST['pwd'] , $_POST['prenom'],$_POST['nom'],$_POST['avatar'],"joueur" ]);
        echo "successs ";
        // proccessus chargement image
        $dossier = 'asset/img/avatar';
        $fichier = basename($_FILES['avatar']['name']);
        $taille_maxi = 100000;
        $taille = filesize($_FILES['avatar']['tmp_name']);
        $extensions = array('.png', '.jpg', '.jpeg');
        $extension = strrchr($_FILES['image']['name'], '.'); 
        //Début des vérifications de sécurité...
        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
            $erreur = 'Vous devez uploader un fichier de type png , jpg, jpeg, txt ou doc...';
        }
        if($taille>$taille_maxi)
        {
            $erreur = 'Le fichier est trop gros...';
        }
        if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
        {
            //On formate le nom du fichier ici...
            $fichier = strtr($fichier, 
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
            {
                echo 'Upload effectué avec succès !';
            }
            else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
            }
        }
        else
        {
            echo $erreur;
        }
      }
    }
    ?>