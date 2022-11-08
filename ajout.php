<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Joueurs';
//recupération des infos
$joueur = $_REQUEST['name'];


try{
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//La réquête
$req = "INSERT INTO Joueurs (nom)
VALUES('$joueur')";

$connexion->exec($req);
echo 'joueur ajouté';

// $connexion->exec($req);
// echo 'nombre de joueurs Maximum atteint';
    
}
catch(PDOException $e){
    echo 'erreur : ' . $e->getMessage();
}

header('Location: http://localhost:8080/KohLanta/formulaire.php');
exit();

?>

<!-- ajout.php n'est plus utilisé mais je ne désespère pas de mettre à jour une version plus 
approfondie de ce jeu. je passais par cette redirection afin d'ajouter des joueurs à mon jeu via
 le formulaire commenté en page formulaire.php -->