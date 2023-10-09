<?php
require_once('../5.base_php/dbcat.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="chat.css"> 
    <title>Connexion</title>
</head>
<body>
    <?php include 'inc/header.php'; ?>
    <br><br><br><br>

    <form method='post'>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Se connecter">
            <a href="register.php">Vous n'avez pas de compte ? Chat pristi!</a>
        </div>
    </form>
    <?php 
    if (isset($_POST) && !empty($_POST)) {
        $select = $bdd->prepare('SELECT * FROM users WHERE (username=:user OR email=:user)');
        $select->execute(array(
            'user' => $_POST['username']
        ));
        $select = $select->fetch(PDO::FETCH_ASSOC);
        echo  $select['password'] . ' ' . $_POST['password'] . '<br>';
        echo  password_verify($_POST['password'], $select['password']) ? 'true' : 'false';
        if (!empty($select) && password_verify($_POST['password'], $select['password'])) { 
            session_start();
            $_SESSION = $select;
            header('Location: index.php');
        } else {
            echo '<script> alert("mot de passe invalide") </script>';
        }
        
        
    }
    
    ?>



<br><br><br><br><br><br><br>
    <?php include 'inc/footer.php'; ?>

</body>
</html>