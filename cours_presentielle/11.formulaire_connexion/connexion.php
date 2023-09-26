<?php
session_start();
if (!empty($_SESSION)) header('Location: index.php');
require_once('../5.base_php/db.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="" method="post">
        <pre>
            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" value="Se connecter">
            <a href="./forgotpassword.php">Mot de passe oublié ?</a>
            <a href="./register.php">Vous n'avez pas de compte ?</a>
        </pre>
    </form>
    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:login OR email=:login) AND password=:password');
        $select->execute(array(

            'login' => $_POST['username'],
            'password' => sha1( $_POST['password'])
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        if (!empty($select)) {
            session_start();
            $_SESSION = $select;
            header('Location: index.php');
        } else
        echo "<script> alert('Le mot de passe ou le pseudo n\'est pas bon') </script>";
        
    }
    ?> 

    
</body>
</html>