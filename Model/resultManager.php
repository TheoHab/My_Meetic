<?php
require_once 'dbLog.php';
$j=0;
$db = new DB;
$request = $db->connection();
$result = $request->query("SELECT name, surname, gender, city, picture, bio, mail, DATE_FORMAT(birthdate, '%Y') as 'age' FROM user ORDER BY RAND() LIMIT 10;")->fetchAll();
for ($i = 0; $i < count($result); $i++) {
    $age = 2022 - $result[$i]['age'];
    if($result[$i]['mail'] !== $_SESSION['mail']){
    echo "<li style='margin: .3%;'><div id='profil".$i."' style='border-radius: 10px;cursor: pointer;text-align: center;height: 40em; width: 30em; background-image: url(".$result[$i]['picture']."); background-repeat: no-repeat; background-size: cover; background-position: center;'>
    <div style='padding-top: 70%;'>
    <p class='vignette'>".$result[$i]['name']."</p>
    <p class='vignette'>".$result[$i]['surname']."</p>
    <p class='vignette'>".$age." ans</p>
    <p class='vignette'>De: " . $result[$i]['city'] . "</p>

    </div>
    </div></li>";
    }else{
        
    }
}
