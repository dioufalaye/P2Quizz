<?php

    try
    {
        $myPDO = new PDO ('mysql: host = localhost; dbname = Bdquizz ', ' root ', '');
        echo "yes";
        $connection=true;
    }
    catch( Exception $e)
    {
        echo $e->getMessage();
      echo "le bleme c'est en haut";
      $connection=false;
    }

?>