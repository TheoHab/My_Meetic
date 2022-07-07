<?php
session_start();
require_once "dbLog.php";

$name = $_REQUEST['name'] == "" ? null : $_REQUEST['name'];
$surname = $_REQUEST['surname'] == "" ? null : $_REQUEST['surname'];
$city = $_REQUEST['city'] == "" ? null : $_REQUEST['city'];
$age = $_REQUEST['age'];
$genre = $_REQUEST['genre'] == "choisissez un genre" ? null : $_REQUEST['genre'];

switch ($age) {
    case "18-25 ans":
        $minAge = 2022 - 18;
        $maxAge = 2022 - 25;
        break;
    case "26-35 ans":
        $minAge = 2022 - 26;
        $maxAge = 2022 - 35;
        break;
    case "36-50 ans":
        $minAge = 2022 - 36;
        $maxAge = 2022 - 50;
        break;
    case "+50 ans":
        $minAge = 2022 - 50;
        $maxAge = 2022 - 99;
        break;
    default:
        $minAge = null;
        $maxAge = null;
}
$db = new DB;
$request = $db->connection();
if($minAge == null || $maxAge == null){
$sql = "SELECT *, DATE_FORMAT(birthdate, '%Y') as 'age' FROM user WHERE name LIKE '%$name%' AND surname LIKE '%$surname%' AND city LIKE '%$city%' AND gender LIKE '%$genre%';";
}else{
$sql = "SELECT *, DATE_FORMAT(birthdate, '%Y') as 'age' FROM user WHERE name LIKE '%$name%' AND surname LIKE '%$surname%' AND city LIKE '%$city%' AND gender LIKE '%$genre%' AND DATE_FORMAT(birthdate, '%Y') BETWEEN $maxAge AND $minAge;";
}
$result = $request->query($sql)->fetchAll();
for ($i = 0; $i < count($result); $i++) {
    $age = 2022 - $result[$i]['age'];
    if ($result[$i]['mail'] !== $_SESSION['mail']) {
        echo "<li style='margin: .3%;'><div id='profil" . $i . "' style='border-radius: 10px;cursor: pointer;text-align: center;height: 40em; width: 30em; background-image: url(" . $result[$i]['picture'] . "); background-repeat: no-repeat; background-size: cover; background-position: center;'>
        <div style='padding-top: 70%;'>
        <p class='vignette'>" . $result[$i]['name'] . "</p>
        <p class='vignette'>" . $result[$i]['surname'] . "</p>
        <p class='vignette'>" . $age . " ans</p>
        <p class='vignette'>De: " . $result[$i]['city'] . "</p>
        </div>
        </div></li>";
    }
}
