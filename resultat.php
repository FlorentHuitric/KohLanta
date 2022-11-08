<?php

include 'bdd.php';

?>

<h1>Le dernier survivant!!</h1>

<p>Voici qui est le grand ou la grande gagnant(e) de cette 1ère édition de Koh Lanta, La guerre des Devs</p>

<img class='d-block img-fluid mx-auto' src="img/denisCestUnFou.gif" alt="inscrivez vous">

<p class='mt-4'>La personne ayant marqué le <strong>moins</strong> de points sur les 5 épreuves cumulées remporte le totem final!!</p>

<?php
//Je souhaitais joindre les 5 tables mais impossible d'obtenir un résultat malheuresement, j'aurai du rester sur mon idée de 1 table pour l'ensemble...
// $join = $connexion->query('SELECT *
//          FROM epreuve1
//          NATURAL JOIN epreuve2,epreuve3,epreuve4,epreuve5');
//          if($join->fetch())
//          {
//              echo "yes";
//          }
//          else
//          {
//              echo 'no';
//          }




function totalPerso($perso){

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'Florent';
    $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($i=1; $i <=5 ; $i++) { 
$sql="SELECT * FROM epreuve$i WHERE Epreuve='$perso'"; //requete
$result = $connexion->query($sql); //execution
while ($row = $result->fetch()) { //boucle tant que; fetch correspond à une ligne du resultat global
    // $cumul = $row['classement'.$i]++;
    echo '<br>'.$perso. ' a marqué '.$row['classement'.$i]. ' points.'; // affichage du résultat 
    // echo $cumul;
} 
}
}
$table = array('Florent','Stephane','David','Anne-Charlotte','Sandrine','Léa','Mélanie','Gautier','Mélissa','Vanessa','Ismael','Valentin');
for ($i=0; $i <count($table) ; $i++) { 
    echo '<hr>'.totalPerso($table[$i]);
}

?>
<h2></h2>
<?php
//appel du footer
include 'footer.php';

?>

