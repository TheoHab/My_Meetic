<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>My_meetic</title>
</head>

<body>
    <header>
        <nav class="nav">
            <h1 id="titre"><em>Fracti Cordis</em></h1>
            <div id="logos">
                <img src="/css/images/coeur.png" class="logo" id="coeur_L" alt='un coeur'><img src="/css/images/coeur2.png" alt='demi_coeur' class="logo" id="coeur_R">
            </div>
            <ul class="nav_ul" id="ul_block">
                <li class="li"><a class="menu_a" href="profil.php">Votre compte</a></li>
                <li class="li"><a class="menu_a" href="acceuil.php">Acceuil</a></li>
                <li class="li"><a class="menu_a" href="../index.php">Déconexion</a></li>
            </ul>
        </nav>
    </header>
    <div id="vignette">
        <div id="profil_user">
            <img src="<?php echo $_SESSION['picture']; ?>" class="profil_pic" style='cursor: pointer;' />
            <p class="vignette_text"><?php echo $_SESSION['name'] ?></p>
            <p class="vignette_text"><?php echo $_SESSION['surname'] ?></p>
        </div>
    </div>
    <section id="search">
        <form id="search_bar">
            <input type="text" id="nom" class="input_search" placeholder="nom">
            <input type="text" id="prenom" class="input_search" placeholder="prénom">
            <select id="genre" class="input_search" style='height: 30px;'>
                <option >choisissez un genre</option>
                <option id="homme">Homme</option>
                <option id="femme">Femme</option>
                <option id="autre">Autre</option>
            </select>
            <input type="text" class="input_search" id="ville" placeholder="Ville">
            <select id='age'>
                <option>Selectionnez votre tranche d'âge</option>
                <option>18-25 ans</option>
                <option>26-35 ans</option>
                <option>36-50 ans</option>
                <option>+50 ans</option>
            </select>
            <button type="submit" class="search_btn" style="float: right !important;">Ok</button>
        </form>
    </section>
    <div id='selecteur'>
        <button type='button' id='previous' style='visibility: hidden;'></button>
        <label for='previous' style='cursor: pointer;' class='labels'>< </label>
        <button type='button' id='next' style='visibility: hidden;'></button>
        <label for='next' style='cursor: pointer;' class='labels'>></label>
    </div>
    <div id="result">
        <ul id='ul_result'>
            <?php require_once "../Model/resultManager.php" ?>
        </ul>
    </div>
</body>
<script src="../Controleur/scriptNav.js"></script>
<script src="../Controleur/controleurSearch.js"></script>


</html>