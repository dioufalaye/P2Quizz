<?php
    try
    {
        $myPDO = new PDO ('mysql: host = localhost; dbname = gesclinique ', ' root ', '');
        
    }
    catch( Exception $e)
    {
        echo $e->getMessage();
      echo "le bleme c'est en haut";
    }

?>