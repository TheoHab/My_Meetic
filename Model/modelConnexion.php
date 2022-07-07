<?php
require_once 'dbLog.php';
$mail = $_REQUEST['mail'];
$mdp = $_REQUEST['mdp'];

$db = new DB;
$sendData = $db->connection();
$password = $sendData->query("SELECT password , name, surname, mail, picture, bio, city FROM user where mail = '$mail';")->fetch();
if (password_verify($mdp, $password['password']) == true) {
    echo "Bienvenu sur Fracti cordis";
    session_start();

    $_SESSION['name'] = $password['name'];
    $_SESSION['surname'] = $password['surname'];
    $_SESSION['mail'] = $password['mail'];
    $_SESSION['picture'] = $password['picture'];
    $_SESSION['bio'] = $password['bio'];
    $_SESSION['city'] = $password['city'];
} else {
    echo "Mot de pass incorrect";
}
