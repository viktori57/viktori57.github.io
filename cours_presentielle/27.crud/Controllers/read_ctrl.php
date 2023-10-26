<?php
require_once('../inc/db.php');

$select = $bdd->prepare('SELECT * FROM user');
$select->execute();
$select = $select->fetchAll(PDO::FETCH_CLASS);


?>