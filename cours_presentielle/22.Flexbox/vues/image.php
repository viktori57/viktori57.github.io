<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Images</title>
</head>
<body>
    <?php
        include('../inc/nav.php');
    ?>
    <div class="Balise">
        <h2>La Balise &lt;img&gt; : L'image sur une page HTML</h2>
        <p>C'est avec l'attribut src que l'on indique le chemin vers le fichier voulu.</p>
        <h3>
            &lt;img class='fit-picture'<br><br>
                src="/media/example/grapefruit.jpg"<br><br>
                alt="Grapefruit"&gt;
        </h3>
    </div>
    <img src="../Public/Images.png"  width="500px" alt="Image de street fighter">
    <img src="../Public/Images.png" width="500px" alt="Image figth de street fighter">
    <img src="../Public/Images.png" width="500px" alt="Image de street fighter">
</body>
</html>