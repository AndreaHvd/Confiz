<?php
include_once("head.php");
$page = "boutique-gerant";
include_once("header.php");
?>

<body>
<?php 
$sql = "SELECT * FROM boutique NATURAL JOIN adresses";
    $boutique = db_query($sql);
    foreach($boutique as $element) {
    echo ("<div class='boutique-gerant texte'>
    <div class='img-confiserie'>
        <img src='https://via.placeholder.com/250x200' alt='boutique'>
    </div>
    <div class='info-boutique'>
        <div class='info'>
            <p>".$element['nom']."</p>
        </div>
        <div class='info'>
            <p>".$element['numero_rue'].$element['nom_adresse'].$element['code_postal'].$element['ville'].$element['pays']."</p>
        </div>
    </div>
</div>");
    }
?>

    <input type="button" value="Ajouter une boutique" class="bouton_rectangle">
</body>

</html>