<?php
include_once("head.php");
$page = "boutique-gerant";
include_once("header.php");
?>

<body>

<?php 
$sql = "SELECT * FROM boutiques NATURAL JOIN adresses";
    $boutique = db_query($sql);
    foreach($boutique as $element) {
    echo ("<div class='bloc'><div class='boutique-gerant texte'>
    <div class='img-confiserie'>
        <img src='https://via.placeholder.com/250x200' alt='boutique'>
    </div>
    <div class='info-boutique'>
        <div class='info'>
            <p><u>".$element['nom']."</u></p>
        </div>
        <div class='info'>
            <p>".$element['numero_rue']." ".$element['nom_adresse']."</br>".$element['code_postal']." ".$element['ville']." ".$element['pays']."</p>
        </div>
    </div>
    <a class='bouton_rectangle' href='confiserie-gerant.php?id=".$element['boutique_id']."'>Voir</a>
    <div class='delete-all'>
        <input type='submit' class='bouton-stock bouton-rouge texte' value='X'>
    </div>
</div></div>");
    }
?>
<div class="bloc">
    <a class="bouton_rectangle texte" href="add-boutique">Ajouter une boutique</a>
</div>
</body>

</html>