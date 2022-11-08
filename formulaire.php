<?php
//appel de ma base de données
include 'bdd.php';

?>
<div class='container d-flex h-100'>
    <div class='row align-self-center'>
        <h1 class='my-auto'>Mise en condition</h1>

        <p>Denis vous a parlé des rudes épreuves à venir, maintenant c'est une histoire entre vous et vous mêmes.</p>
        <p>Serez vous capable de l'emporter sur vos concurents? C'est la question à laquelle nous allons répondre immédiatement</p>
        <img src="img/denisGo.webp" alt="denis">
        <!-- <form action="ajout.php" method="post">        formulaire créé dans le but de personnaliser les joueurs afin de les inscrire directement dans la table créée en index.php
            <div>
                <label for="name">Nom :</label>
                <input type="text" name="name">
                <button type="submit">Valider Joueur</button>
            </div>
        </form> -->
        <?php
        // try{
        //     $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        //     $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $nbJoueurs = $dbname->query('SELECT COUNT(*) FROM Joueurs');
        // // $nb = $nbJoueurs->fetchColumn();
        // echo 'le nombre de participants enregistrés est de ' .$nbJoueurs. ' Joueurs!';
        // }
        // catch(PDOException $e){
        //     echo 'erreur : ' . $e->getMessage();
        // }


        ?>
        <h2>L'arrivée à la nage</h2>
        <p>Les 12 participants débarquent sur l'ile à la nage, le plus rapide se demarque d'emblée et marque les esprits par la même occasion!</p>

        <h2>Le parcours du combattant</h2>
        <p>Les 12 participants se ruent vers la ligne d'arrivée avec une seule idée en tête, Montrer sa détermination physique et mentale à ses concurrents!</p>

        <h2>Le tir à l'arc</h2>
        <p>Là encore, une épreuve emblématique de Koh Lanta ou nos 12 devs en herbe devront garder la mire bien en joue et s'abstenir de trembler!</p>

        <h2>L'orientation</h2>
        <p>C'est déjà la fin de cette longue (et très courte à la fois) aventure, et nos aventuriers ne lâchent rien! Qui trouvera le poignard en premier afin de s'assurer sa place sur les poteaux sans malus?</p>

        <h2>Les poteaux</h2>
        <p>Les 12 participants débarquent sur la plage où ils étaient arrivé un mois plus tôt, changés et prêts à en découdre une pénultième fois! Le vainqueur final va se dégager des autres, enfin, il n'en restera qu'un, ou qu'une!! </p>
        <!-- <p>Quand vous avez assez de Joueurs dans la compétition,--><p>Appuyez sur le bouton <strong>Commencer les épreuves</strong></p> 
        <form action="jeux.php">
        <button class='btn btn-secondary pb-2' type="submit">Commencer les épreuves</button>
        </form>
    </div>
</div>
<?php
//appel du footer
include 'footer.php';

?>
