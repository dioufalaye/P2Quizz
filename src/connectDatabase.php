<?php

    try
    {
        $myPDO = new PDO ('mysql: host = localhost; dbname = Bdquizz ', ' root ', '');
        
      var_dump($myPDO);
    }
    catch( Exception $e)
    {
        echo $e->getMessage();
      echo "le bleme c'est en haut";
     
    }

?>