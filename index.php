<?php
//appel de la création de la base de donnée
include 'head.php';
//à implémenter => l'interdiction de refresh si la base est déja créée


 //table créée au début dans le but de générer les joueurs et de pouvoir les personnaliser
// try{
//     $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $sql = "CREATE TABLE Joueurs(
// classement int(2) AUTO_INCREMENT PRIMARY KEY,
// nom VARCHAR(20) NOT NULL,
// epreuve1 int(2) UNSIGNED NOT NULL,
// epreuve2 int(2) UNSIGNED NOT NULL,
// epreuve3 int(2) UNSIGNED NOT NULL,
// epreuve4 int(2) UNSIGNED NOT NULL,
// epreuve5 int(2) UNSIGNED NOT NULL,
// total int(3) UNSIGNED NOT NULL)";

//     $connexion->exec($sql);
//     echo 'table créée';


// }

// catch(PDOException $e){
//     echo 'erreur : ' . $e->getMessage();
// }

?>
<div class='mx-auto'> 
    <h1 class='text-center'>KOH LANTA</h1>

    <h2 class='text-center'>LA BATAILLE DES DEVs</h2>

    <img class='d-block img-fluid' src="img/kohLanta.jpg" alt="Koh-lanta">

    <p class='text-center'>Bienvenue sur la bataille des Devs, où vous pourrez (un jour) créer vos personnages et les mettre en compétition sur 5 épreuves emblématiques de Koh Lanta. Denis vous tient à l'oeil, faites bien attention. Bon courage Aventurier!</p>
    
</div>

<p class='text-center fixed-auto'>Veuillez maintenant passer à <br>
<a class='mt-4 btn btn-secondary' href='formulaire.php'>la création des personnages</a></p>



<?php
//appel du footer
include 'footer.php';

?>
