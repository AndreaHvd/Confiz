<?php
include_once("head.php");
$page = "boutique-client";
include_once("header.php");
?>

<body>
    <div class='bloc'>
    <?php
    $sql = "SELECT * FROM boutiques NATURAL JOIN adresses";
    $boutique = db_query($sql);
    foreach ($boutique as $element) {
        echo ("<div class='carte_boutique'>
        <div class='texte'><u>".$element['nom']."</u></div>
        <div class='photo_boutique'></div>
        <div class='adresse_boutique texte'>".$element['numero_rue']." ".$element['nom_adresse']."</br>"
        .$element['code_postal']." ".$element['ville']." ".$element['pays']."</div>
        <a class='bouton_rectangle' href='confiserie-client.php?id=".$element['boutique_id']."'>Voir</a></div>");
    }
    ?>
    </div>
</body>

</html>
