<?php
require_once "dbLog.php";

session_start();
$mail = $_SESSION['mail'];
$content = $_REQUEST['content'];
$modif = $_REQUEST['modif'];
$new = $_REQUEST['new'];
$db = new DB;
$connex = $db->connection();
if($content !== null){
$bool = $connex->query("UPDATE user SET bio = '$content' WHERE mail = '$mail';");
}
if ($bool == true) {
    echo "ok";
};
if ($modif == "name") {
    $db = new DB;
    $connex = $db->connection();
    $bool = $connex->query("UPDATE user SET name = '$new' WHERE mail = '$mail';");
    if ($bool == true) {
        echo "modifName";
    }
} elseif ($modif == "surname") {
    $db = new DB;
    $connex = $db->connection();
    $bool = $connex->query("UPDATE user SET surname = '$new' WHERE mail = '$mail';");
    if ($bool == true) {
        echo "modifSurname";
    }
    
}elseif ($modif == "mail") {
    $db = new DB;
    $connex = $db->connection();
    $bool = $connex->query("UPDATE user SET mail = '$new' WHERE mail = '$mail';");
    if ($bool == true) {
        echo "modifMail";
    }
}
elseif ($modif == "city") {
    $db = new DB;
    $connex = $db->connection();
    $bool = $connex->query("UPDATE user SET city = '$new' WHERE mail = '$mail';");
    if ($bool == true) {
        echo "modifCity";
    }
}

