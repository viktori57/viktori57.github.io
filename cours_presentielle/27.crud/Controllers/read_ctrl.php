<?php

if (isset($_GET) && !empty($_GET['page'])) {
    if ($_GET['page'] == "read") {
        require_once('../inc/db.php');
    }
} else {
    require_once('./inc/db.php');
}

$Tableau = $bdd->prepare('SELECT * FROM user');
$Tableau->execute();
$Tableau = $Tableau->fetchAll(PDO::FETCH_CLASS);

?>