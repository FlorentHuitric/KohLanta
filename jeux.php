<?php
//appel de la base de donnée
include 'bdd.php';

?>








<?php

try{
    //créer des cinq tables et empêcher la continuation de la table au refresh!!!!
    $sql = 'SHOW TABLES FROM Florent LIKE "Epreuve1"';
    $req = $connexion->query($sql);
    if ($req->rowCount() > 0) {
        header('Location: http://localhost/KohLanta/resultat.php'); 
        exit();       //si refresh de la page après que les résultats soient éxécutés, redirection vers le résultat final!
    }else {
        for ($i=1; $i <=5 ; $i++) { 
            $sql2 = "CREATE TABLE Epreuve$i(
                epreuve VARCHAR(20) NOT NULL,
                classement$i int(2) NOT NULL)";
                
                    $connexion->exec($sql2);
        }
    }

}

catch(PDOException $e){
    echo 'vous ne pouvez pas recommencer la partie';
}

$table = array('Florent','Stephane','David','Anne-Charlotte','Sandrine','Léa','Mélanie','Gautier','Mélissa','Vanessa','Ismael','Valentin');

for($epreuve=1;$epreuve<=5;$epreuve++){
    shuffle($table);
    $i=1;
foreach ($table as $key) {
        $sql3="INSERT INTO Epreuve$epreuve(epreuve,classement$epreuve)
        VALUES ('$key','$i')";
            $connexion->exec($sql3);
            $i++;

}
}

//Affichage des données stockées dans la BDD
function genererTable($numero){
    echo '<h2>épreuve ' .$numero. '</h2>
    <br>
    <strong>Je veux afficher le résultat de l\'épreuve ' .$numero. ', ici!!</strong><br>';
    $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'Florent';

            $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="SELECT * FROM epreuve$numero"; //requete
$result = $connexion->query($sql); //execution
while ($row = $result->fetch()) { //boucle tant que; fetch correspond à une ligne du resultat global
    echo $row['epreuve']." | ".$row['classement'.$numero]."<br>"; // affichage du résultat 
}
}
?>

<?php
for ($i=1; $i <=5 ; $i++) { 
    echo genererTable($i).'<hr><br>';
}
?>

<button class='btn btn-secondary' href="resultat.php"> Who's the champion???</button> 
<!-- le bouton ne semble plus marche, je ne sais pas pourquoi, j'ai paramétré la page suivante au refresh pour éviter les triches ceci dit -->
<?php
//appel du footer
include 'footer.php';

?>


