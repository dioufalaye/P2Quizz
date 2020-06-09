<?php
//LOCAL
$host = '127.0.0.1';
$db   = 'Bdquizz';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';


/*
//ALWAYS 
$host = "mysql-dioufalaye3.alwaysdata.net";
$db  = 'dioufalaye3_bdquizz';
$user='dioufalaye3';
$pass = 'Ledecideur1.';
$charset = 'utf8mb4';*/


$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try {
     $pdo = new \PDO($dsn, $user, $pass, $options);
     echo "connextion";
    
} catch (\PDOException $e) {
    // throw new \PDOException($e->getMessage(), (int)$e->getCode());
    echo "dioufalaye 773228659 DATA AND DEV";
}
?>