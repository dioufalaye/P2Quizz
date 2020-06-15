<? php
session_start ();
include ( 'connectDatabase.php' );
global  $ db ;
$ message = '' ;
    if ( isset ( $ _POST [ 'userlogin' ]) && $ _POST [ 'userlogin' ]! = '' && isset ( $ _POST [ 'pwd' ]) && $ _POST [ 'pwd' ]! = '' 
    && isset ( $ _POST [ 'prenom' ])
    && $ _POST [ 'prenom' ]! = '' && isset ( $ _POST [ 'nom' ]) && $ _POST [ 'nom' ]! = '' )
    
    {
        
      $ stmt = $ pdo -> prepare ( "SELECT * FROM utilisateur WHERE userlogin =?" );
      $ stmt -> execute ( array ( $ _POST [ 'userlogin' ]));
      $ utilisateur = $ stmt -> fetch ();
      var_dump ( $ utilisateur );
      if ( $ utilisateur [ 'userlogin' ] === $ _POST [ 'userlogin' ])
      {
          $ message = "existance de connexion" ;
          echo  $ message ;
      }
      sinon {
        $ sql = "INSERT INTO utilisateur (id, userlogin, pwd, prenom, nom, photo, role) VALUES (NULL,?,?,?,?,?,?)" ;
        $ pdo -> prepare ( $ sql ) -> execute ([ $ _POST [ 'userlogin' ], $ _POST [ 'pwd' ], $ _POST [ 'prenom' ], $ _POST [ 'nom' ], $ _POST [ ' avatar ' ], "joueur" ]);
          header('location:../../../../index.php');        
        faire écho aux  «succès» ;
        // proccessus chargement image
        $ dossier = 'actif / img / avatar' ;
        $ fichier = basename ( $ _FILES [ 'avatar' ] [ 'name' ]);
        $ taille_maxi = 100000 ;
        $ taille = filesize ( $ _FILES [ 'avatar' ] [ 'tmp_name' ]);
        $ extensions = array ( '.png' , '.jpg' , '.jpeg' );
        $ extension = strrchr ( $ _FILES [ 'image' ] [ 'nom' ], '.' );
        // Début des vérifications de sécurité ...
        if (! in_array ( $ extension , $ extensions )) // Si l'extension n'est pas dans le tableau
        {
            $ erreur = 'Vous devez uploader un fichier de type png, jpg, jpeg, txt ou doc ​​...' ;
        }
        if ( $ taille > $ taille_maxi )
        {
            $ erreur = 'Le fichier est trop gros ...' ;
        }
        if (! isset ( $ erreur )) // S'il n'y a pas d'erreur, lors du téléchargement
        {
            // On formate le nom du fichier ici ...
            $ fichier = strtr ( $ fichier ,
                «ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ» ,
                «AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy» );
            $ fichier = preg_replace ( '/([^.a-z0-9▶++//' , '-' , $ fichier );
            if ( move_uploaded_file ( $ _FILES [ 'image' ] [ 'tmp_name' ], $ dossier . $ fichier )) // Si la fonction renvoie TRUE, c'est que ça a fonctionné ...
            {
                echo  'Upload effectué avec succès!' ;
            }
            else  // Sinon (la fonction renvoie FAUX).
            {
                echo  'Echec de l \' upload! ' ;
            }
        }
        autre
        {
            echo  $ erreur ;
        }
      }
    }
    ?>