<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/connexion.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Profil</title>
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
    <section id="data">
        <img style='width: 150px;' src="<?php echo $_SESSION['picture'] ?>" />
        <h4><?php echo $_SESSION['name'] ?><button type="button" style="margin-left: 5%;" class='submit modif' value='name'>Modifier</button></h4>
        <h5><?php echo $_SESSION['surname'] ?><button type="button" style="margin-left: 5%;" class='submit modif' value='surname'>Modifier</button></h5>
        <p><?php echo $_SESSION['city'] ?><button type="button" style="margin-left: 5%;" class='submit modif' value='city'>Modifier</button></p>
        <p><?php echo $_SESSION['mail'] ?><button type="button" style="margin-left: 5%;" class='submit modif' value='mail'>Modifier</button></p>
        <p><?php echo $_SESSION['bio'] == null ? "Vous n'avez pas encore de bio" : $_SESSION['bio'] ?>
        <form><textarea id="bio" style="resize: none; width: 50%; height: 100px; margin: 5%;" placeholder="Décrivez-vous"></textarea>
            <button id="addBio" type="button" class="search">Add</button>
        </form>
        <div class='hobs'>
            <ul>
                <?php require_once '../Model/dbLog.php';
                $mail = $_SESSION['mail'];
                $db = new DB;
                $connex = $db->connection();
                $result = $connex->query("SELECT hobbie.name FROM user INNER JOIN user_has_hobbies ON user.id = user_has_hobbies.id_user INNER JOIN hobbie ON user_has_hobbies.id_hobbies = hobbie.id WHERE mail = '$mail';")->fetchAll();
                foreach ($result as $res) {
                    echo "<li>" . $res['name'] . "</li>";
                }
                ?>
            </ul>
        </div>
    </section>
</body>
<script src="../Controleur/scriptNav.js"></script>
<script src="../Controleur/controleurProfil.js"></script>

</html>