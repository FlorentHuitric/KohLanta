<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">
<title>KohLanta</title>
</head>
    <body class="bg-light text-center">
        <header>
            <nav class="navbar fixed-top navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand">Le Menu</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"> 
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active text-light" href="index.php">Accueil</a></li>
                            <li class="nav-item dropdown"><a class="text-light nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" href="joueurs.php">Les Joueurs</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="joueurs.php">Florent</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">David</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Léa</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Stephane</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Ismael</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Mélanie</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Gautier</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Vanessa</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Sandrine</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Valentin</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Mélissa</a></li>
                                    <li><a class="dropdown-item" href="joueurs.php">Anne-Charlotte</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="text-light nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Informations</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="contact.php">Contact</a></li>
                                    <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
                                </ul>
                            </li>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Tapez votre recherche"></input>
                                <button class="btn btn-outline-success" type="submit">Chercher</button>
                            </form>
                        </ul>
                    </div>    
                </div>
            </nav>
        </header>
<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'Florent';

            $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>