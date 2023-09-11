<?php
require_once('db.php');
if (isset($_POST) && !empty($_POST)) { // $_GET
        echo '<pre>'; var_dump($_POST); echo '</pre>';
        echo $_POST['first'];
        echo $_POST['password'];
        // Sha1 Hash le mot céest à dire
        // le compléxifi et le rend illisible
        // sha1 / md5
        echo sha1($_POST['password']);
        echo md5($_POST['password']);

        $insert = $bdd->prepare('INSERT INTO utilisateur(firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)');
        $insert->execute(array(
            $_POST['first'],
            $_POST['Last'],
            $_POST['email'],
            md5($_POST['password']),
            $_POST['gender']
        ));
        header('Location: index.php');

    } 