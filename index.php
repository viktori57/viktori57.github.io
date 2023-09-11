<?php
// Quand le fichier est lu on veur que le fichier db sois lu aussi
require_once('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    echo "<p class = 'test'> Bonjour </p>";
    // J'affiche Bonjour sur ma page dans une balise p avec comme
    // classe test
    echo "<p>" . "Bonjour" . "<p/>";
    $cookie = 10;
    // $ = var/let
    // Je défini ma variable avec $ puis
    // je lui donne le nom cookie
    // et je lui rentre la valeur 10
    $phrase = "Je suis une phrase"; // string
    $nombre = 1.4; // float
    $choix = true; // Booléens
    /*
    Integrer => Nombre entier comme 50, 47, 874698
    Float => Nombre à virgule comme 74,58, 4,355456543, 1,0004
    String => Chaine de caractère comme 
        "Bonjour"
        "Je code sur ordinateur"
    booléens => true(vrai) ou false(faux)
    Array =>
        Indexés
        Associatif
    Null => NULL
    */
    echo $phrase;
    

    // Les conditions

    $condition = false;
    if ($condition) {
        echo "<br>Je passe ici donc c'est vrai";
    } else {
        echo "<br>Je passe par la donc c'est faux";
    }

    $code = 4227;
// == Ca prend en compte que la variable sois égale
// === ca prend en compte que l variable sois égale
// et du même type
    if ($code == 4227) {
        echo "<p>Le code est correct</p>";
    } else {
        echo "<p>Le code n'est pas correct</p>";
    }

    $couleur = "rouge";
    echo "<p>J'ai une autruche de couleur ". $couleur ."</p>";

    if ($couleur == "rouge") { // Si
        echo "<p>J'ai une autruche de couleur rouge</p>";
    } else if ($couleur == "bleu") { // Sinon Si
        echo "<p>J'ai une autruche de couleur bleu</p>";
    } else { // Sinon
        echo "<p>J'ai pas d'autruche<p/>";
    }

    // Ecriture Ternaire

    $a = 15;
    $un = $a > 11 ? 1 : 0;
    // Si $a supérieur à 11 alors $un est égal à 1 sinon il
    // sera égal à 0

    // Les Switch

    $tailles = 170;

    switch ($tailles) {
        case 120:
            echo "<p>Tu es atteint de nanisme.</p>";
            break;
        case 150:
            echo "<p>Tu es très petit(e)</p>";
            break;
        case 170:
            echo "<p>Tu as une taille convenable</p>";
            break;
        case 200:
            echo "<p>Bonjour Monsieur !</p>";
            break;
        default:
            echo "Tu n'existe pas !!";
            break;
    }

    // Les Tableaux

    $tableau = [
        42, // 0
        78, // 1
        48, // 2
        1486658, // 3 
        "Une Autruche" // 4
    ];
    echo $tableau[4] . "<br>";

    echo '<pre>';
    var_dump($tableau);
    echo '</pre>';

    $exo = [4, 12, 78, 98, 65];
    $resultat = $exo[2] - ($exo[0] * $exo[1]);
    $resultat = ($exo[3] - $exo[4]) - ($exo[1] / $exo[0]);
    echo $resultat;
    // La valeur de $resultat doit être égal à 30 en utilisant
    // que les nombres qui se trouve dans le tableau exo  
    // 78 - (4 * 12) 
    // (98 - 65) - (12 / 4) 

    // Tableaux Associatifs

    $tab_assoc = [
        "voiture" => "volkswagen" , // Type string
        "animal" => "perroquet" , // Type string
        "chiffre" => 10, // Type integer
        "calvitie" => true, // Type boolean
        "legumes" => null // Type Null
    ];
    // J'ai fait un tableau avec 5 valeurs qui ont une index
    // que j'ai défini moi même
    // Voiture est une index et volkswagen est sa valeur
    // Animal est une index et perroquet est sa valeur
    // Ainsi de suite
    $tab_assoc['bras'] = false;
    // J'ai défini un nouvelle index bras avec come valeur faux

    echo "<pre>";
    var_dump($tab_assoc); 
    echo "</pre>";

    // Les boucles

    // La boucle while
    $o = 0;
    while(false) {
        $o++;
        echo "<p>Je passe dans la boucle while</p> ";
        if ($o == 10) {
            break;
            // Sert à casser la boucle pour pouvoir l'arrêter
        }
    }

    // la boucle do-while

    do { 
        echo 'Je passe dans la boucle do-while';
    } while (false);
    // La boucle for

    for ($i=0; $i < 10; $i++) {
        echo "<br>Je suis passer " . $i+1 . " fois dans la boucle";
    }

    /* 
    Créer un tableau Associatif en mettant une 
    index bras de type booléen et une index 
    jambe qui va être un integer
    */

    /* 
    Si il n'a pas de jambe ni de bras
        Tu es un e-tronc !
    Sinon si il n'a pas de bras
        Pas de bras pas de chocolat
    Sinon
        Tu es basique donc tu es nul
    */

    $tab_assoc = [
        "bras" => true,
        "Jambe" => 2
    ];
    // Le point d'exclamation (!) veut dire different de
    // Exemple : Si bras est égal à vrai et
    // que je fait différent de il sera égal à faux
    if ($tab_assoc["jambe"] == 0 && !$tab_assoc['bras'])
        echo "<p>tu es un e-tronc !</p>";
    else if (!$tab_assoc["bras"])
        echo "<p>Pas de bras pas de chocolat</p>";
    else
        echo "<p>Tu es basique donc tu es nul</p>";

switch (true) {
    case $tab_assoc ["bras"] && $tab_assoc ["Jambe"] == 2;
        echo "<p>Tu es basique donc tu es nul </p>";
        break;
    case $tab_assoc ["Jambe"] && $tab_assoc ["bras"] == 0;
        echo "<p>Tu es un e-tronc </p>";
        break;
    case $tab_assoc ["bras"] && $tab_assoc ["Jambe"]  == 2;
        echo "Pas de bras pas de chocolat";
        break;
}




    ?>
    
<form action="validation.php" method="post">
    <pre>
        <h1><legend>Register</legend></h1>
        <label for="First">First name :</label><br>
        <input type="text" name="first" id="first">
        <br>
        <label for="Last">Last name :</label><br>
        <input type="text" name="Last" id="Last">
        <br>
        <label for="email">E-mail :</label><br>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password :</label><br>
        <input type="password" name="password" id="password">
        <br>
        <label for="cofirmpassword">Confirm password :</label><br>
        <input type="password" name="confirmpassword" id="confirmpassword">
        <br><br>

    </pre>
    <label for="gender">Gender : </label>
    <br>
    <input type="radio" name="gender" id="Male" value="Male">
    <label for="">Male</label>
    <input type="radio" name="gender" id="Female" value="Female">
    <label for="">Female</label>
    <input type="radio" name="gender" id="others" value="others">
    <label for="">Others</label>
    <br><br>
    <input type="submit" value="Submit">
</form>




<?php
// Si method post rentrer dans le formulaire il faut
// utiliser $_POST
// Sinon si la method get est rentrer dans le formulaire il
// faut utiliser $_GET
// La fonction isset sert à regarder si la variable qui lui
// est donner est bien défini dans ce cas si elle regarde
// Si la variable $_POST est défini
    

     // Je prepare ma commande
    $select= $bdd->prepare('SELECT * FROM utilisateur WHERE GENDER= ?;');
    // Je l'éxecute en lui donnant une valeur à la place des ?
    $select->execute(array('male'));
    // Je récupère tous ce que me renvoie ma commande
    $total = $select->fetchAll(PDO::FETCH_ASSOC);

    // Je l'affiche
    echo '<pre>';
    var_dump($total);
    echo '</pre>';

    echo $total[2]['gender'];



?>
<form action="" method="post">
        <label for="yourname">Your name</label><br>
        <input type="text" name="yourname" id="yourname">
        <br>
        <label for="email">Your mail</label>
        <br>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="message">Your message</label>
        <br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <br>
        <label for="number">Give me a number !</label>
        <br>
        <input type="number" name="number" id="number">
        <br><br>
        <input type="submit" value="envoyer">

</form>

 <?php


if (isset($_POST) && !empty($_POST)) { 
    settype($_POST['number'], 'integer');
    $newmessage = $bdd->prepare('INSERT INTO messages(name, email, message, number) VALUES (?, ?, ?, ?)');
    $newmessage->execute(array(

            $_POST['yourname'],
            $_POST['email'],
            $_POST['message'],
            $_POST['number'],
            
        ));


  
  

    
    }  

        ?>        


<br><br><br><br><br><br><br><br><br><br>
</body>
</html>