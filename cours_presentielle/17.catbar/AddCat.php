<?php 
require_once('../5.base_php/dbcat.php'); 

function Chatleatoire() {
    $chaine = '1234567890';
    return substr(str_shuffle(str_repeat($chaine, 15)), 0, 14);
}
function TestID($bdd) {    
    $id = Chatleatoire();
    $select = $bdd->prepare('SELECT * FROM cat WHERE id=?');
    $select->execute(array(
        $id
    ));
    $select = $select->rowCount();
    if ($select > 0) {
        TestID($bdd);
    }
    return $id;
}
if (isset($_POST) && !empty($_POST)) {
    
    echo (int)TestId($bdd);
    $insert = $bdd->prepare('INSERT INTO cat (id, prenom, color, photo, description, sexe) VALUES (?, ?, ?, ?, ?, ?)');
    $insert->execute(array(
        (int)TestID($bdd),
        $_POST['prenom'],
        $_POST['color'],
        $_POST['photo'],
        $_POST['desc'],
        $_POST['sexe']
    ));
    



















    header('Location: paneladmin.php'); 
}