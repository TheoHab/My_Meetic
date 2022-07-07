<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/connexion.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>connexion</title>
</head>

<body>
    <div id="btn_connexion" class="section">
        <p>Connectez-vous !</p>
        <button name="conn" id="conn">Connection</button>
    </div>
    <div id="btn_inscription" class="section">
        <p>Pas de compte ? Inscrivez-vous !</p>
        <button name="inscri" id="inscri">Inscription</button>
    </div>
    <section id="main_connection" class="section">
        <form method="post" id="form_connexion">
            <h3>Connexion</h3>
            <p>Identifiant :</p>
            <input type="text" name="mail" placeholder="Entrez votre Mail.">
            <p>Mot de passe :</p>
            <input type="password" name="pwd" placeholder="Entrez votre MDP.">
            <div class="button">
                <button type="submit" name="connexion" class="submit">Connexion</button>
                <button type="button" name="mdp_oublie">Mot de passe oublié ?</button>
                <button type="button" id="close_c">Annuler</button>
            </div>
        </form>
    </section>
    <section id="main_inscription" class="section">
        <form method="post" id='form_inscription'>
            <h3>Inscriptions</h3>
            <p>Renseignez-votre Nom et prénom,</p>
            <input type="text" name="name" id="inscription_name" placeholder="Nom">
            <input type="text" name="surname" id="inscription_surname" placeholder="Prenom">
            <p>Votre ville,</p>
            <input type="text" name="city" id="city" placeholder="Ville">
            <p>Votre date de naissance,</p>
            <input type="date" name=birthdate placeholder="Âge">
            <p>Votre mail,</p>
            <input type="text" name="mail" placeholder="Mail">
            <p>Votre genre</p>
            <select id="genre" name="genre">
                <option>Homme</option>
                <option>Femme</option>
                <option>Autre</option>
            </select>
            <p>Ajoutez une image de profil</p>
            <input type="file" id="profil_pic"><img src="" alt='profil_pic'/>
            <p>Renseignez-votre Mdp</p>
            <input type="password" name="password" placeholder="mot de pass" id="password">
            <div class="button">
                <button type="button" name="suivant" id="suivant">Suivant</button>
                <button type="button" id="close_i">Annuler</button>
            </div>
    </section>
    <section id="hobbies_inscription" class="section">
        <p>Indiquez un ou plusieurs de vos Hobbie</p>
        <div id="checkBox">
            <div id="checkBox1">
                <input type="checkbox" name="hobbie_rugby" value="rugby" class="checkbox">Rugby
                <input type="checkbox" name="hobbie_foot" value="Football" class="checkbox">Football
                <input type="checkbox" name="hobbie_basket" value="Basketball" class="checkbox">Basketball
                <input type="checkbox" name="hobbie_volley" value="Volley" class="checkbox">Volley
            </div>
            <div id="checkBox2">
                <input type="checkbox" name="hobbie_golf" value="Golf" class="checkbox">Golf
                <input type="checkbox" name="hobbie_plongé" value="plongé" class="checkbox">Plongé
                <input type="checkbox" name="hobbie_randonné" value="Randonée" class="checkbox">Randonnée
                <input type="checkbox" name="hobbie_Parachute" value="Saut en parachute" class="checkbox">Saut en parachute
            </div>
            <div id="checkBox3">
                <input type="checkbox" name="hobbie_Course" value="Course à Pied" class="checkbox">Course à pied
                <input type="checkbox" name="hobbie_Moto" value="Moto" class="checkbox">Moto
                <input type="checkbox" name="hobbie_Netflix" value="Netflix&Chill" class="checkbox">Netflix & Chill
                <input type="checkbox" name="hobbie_musique" value="musique" class="checkbox">Musique
            </div>
        </div>
        <button type="button" name="precedent" id="precedent">Précedent</button>
        <button type="submit" name="inscription" class="submit" id="inscription_submit">Inscription</button>
        <button type="button" id="close_s">Annuler</button>
        </form>
    </section>
</body>
<script src="Controleur/scriptNav.js"></script>
<script src="Controleur/controleurInscription.js"></script>
<script src="Controleur/Script_connexion.js"></script>
<script src="Controleur/controleurConnexion.js"></script>

</html>