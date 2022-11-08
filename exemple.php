
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Joueurs';

try{
    $connexion = new PDO("mysql:host=$servername", $username, $password);
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //créer base de données!!!
$sql = 'CREATE DATABASE Joueurs';
$connexion->exec($sql);
echo 'base de donnée créée';
}

catch(PDOException $e){
    echo 'erreur : ' . $e->getMessage();
}

?>