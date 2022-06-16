<?php
include_once("head.php");
$page = "confiserie-gerant";
include_once("header.php");
?>

<body>
<div class="main-container">
<div class="add-boutique texte">
        <p>Nouvelle confiserie</p>
        <div class="bloc-add">
            <p>Nom : </p>
            <input class="zone-texte" type="text">
        </div>
        <div class="bloc-add">
            <p>Prix : </p>
            <input class="zone-texte" type="text">
        </div>
        <div class="bouton-selection">
            <input type="button" value="Continuer" class="bouton_rectangle texte">
            <input type="button" value="Annuler" class="bouton_rectangle texte">
        </div>
    </div>
</div>
</body>

</html>