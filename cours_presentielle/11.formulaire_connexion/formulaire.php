<?php
require_once('../5.base_php/db.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Registre</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="" method="post">
        <pre>
            <label for="firstname">Prénom :</label>
            <input type="text" name="firstname" id="firstname" required>

            <label for="lastname">Nom :</label>
            <input type="text" name="lastname" id="lastname" required>

            <label for="email">E-mail :</label>
            <input type="email" name="email" id="email" required>

            <label for="username">Pseudo :</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" required>

            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" oninput="ChangeValue()" required>
        
            <label for="masculin">Masculin :</label><input type="radio" name="genre" id="genre" value="m" required>
    
            <label for="feminin">Féminin  :</label><input type="radio" name="genre" class="genre" value="fr" required>
        
            <br>
            <input type="submit" value="S'inscrire">
            <a href="./login.php">Vous avez déjà un compte</a>

            
        </pre>
    </form>
    <?php
    if (isset($_POST) && !empty($_POST)) {/* !empty($_POST) = count($_POST) !== 0*/
        $select = $bdd->prepare("SELECT * FROM users WHERE username=? AND email=?");
        $select->execute(array($_POST['username'], $_POST['email']));
        $select = $select->fetchAll();
        if (empty($select)) {
            $insert = $bdd->prepare('INSERT INTO users(prenom, nom,email, username, genre, password) VALUE (?, ?, ?, ?, ?, ?);');
            $insert->execute(array(
             $_POST['firstname'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['username'],                
                $_POST['genre'],
                sha1($_POST['password'])
            
        ));
        header("location: connexion.php");
        } else 
            echo '<script> alert("Ce nom d\'utilisatuer est déja utilisé") </script>';


    }



    ?>
    <script>
        function ChangeValue() {
            let Password = document.getElementById('password')
            let confirmPassword = document.getElementById('confirm_password')

            if (Password.value !== confirmPassword.value)
                confirmPassword.setCustomValidity('Les mots de passe doivent être identique')
            else 
                confirmPassword.setCustomValidity('')

            
        }
        function SingleUsername() {
        //     let Username = document.getElementById('username')
        //     document.cookie = "username = " + Username.value

            <?php 
        //         $select = $bdd->prepare("SELECT * FROM users WHERE username=?");
        //         $select->execute(array(
        //             $_COOKIE['username']
        //         ));
        //         $select = $select->fetchAll();
        //         setcookie('select', empty($select), time() + (86400 * 30), "/");
        //     ?>                
        //     // if (bool) {
        //     //     Username.setCustomValidity('Ce nom d\'utilisateur est déjà utilisé')
        //     // }

        }
    </script>

    
</body>
</html>