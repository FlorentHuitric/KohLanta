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
        <title>KohLanta</title>
<link rel="stylesheet" href="style.css">
</head>
    <body class="bg-dark text-center">
        <header>
            <nav class="navbar fixed-top navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" >Le Menu</a>
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
        <img class='d-block img-fluid mx-auto pt-4 pb-4' src="img/denisLaborieux.gif" alt="renseignements">
        <!-- Création d'une fiche de contact -->
        <div class='container d-flex h-100'>
            <div class='row align-self-center'>
                <section class="bg-dark">
                    <form>
                        <div class="row align-items-center">
                            <div>
                                <label class="text-light" for="inlineFormCustomSelect">Le participant concerné par ma demande est :</label>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Florent</option>
                                    <option value="2">David</option>
                                    <option value="3">Léa</option>
                                    <option value="4">Valentin</option>
                                    <option value="5">Anne-Charlotte</option>
                                    <option value="6">Mélissa</option>
                                    <option value="7">Mélanie</option>
                                    <option value="8">Sandrine</option>
                                    <option value="9">Gautier</option>
                                    <option value="10">Vanessa</option>
                                    <option value="11">Stephane</option>
                                    <option value="12">Ismael</option>
                                </select>
                            </div>
                            <div class="col form-check m-4">
                                <input class="form-check-input" type="radio" name="Radio" id="Radio" value="option1" checked>
                                <label class="form-check-label text-light" for="Radio">
                                J'ai une question à propos d'une épreuve
                                </label>
                            </div>
                            <div class="col form-check">
                                <input class="form-check-input" type="radio" name="Radio" id="Radio2" value="option2">
                                <label class="form-check-label text-light" for="Radio2">
                                J'ai une question à propos d'un participant
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <label for="inputEmail">Adresse Mail</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Entrer Email">
                                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse avec qui que ce soit</small>
                            </div>
                            <div class="col form-group">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Mot de Passe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Téléphone</label>
                            <input type="phone" class="form-control" id="inputPhone" placeholder="Numéro de téléphone">
                        </div>
                        <div class="form-group">
                            <label for="FormControlText">Commentaire</label>
                            <textarea class="form-control" id="FormControlText" rows="3" placeholder="&Eacute;crivez votre commentaire"></textarea>
                        </div>
                        <button class='mt-5' type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </section>
            </div>
        </div>

<?php
//appel du footer
include 'footer.php';

?>