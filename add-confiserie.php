<?php
include_once("head.php");
$page = "confiserie-gerant";
include_once("header.php");
$id = $_GET['id'];
?>

<body>
<div class="main-container">
    <div>
    <div class="add-boutique texte">
        <p>Nouvelle confiserie</p>
        <div class="bloc-add">
            <p>Nom : </p>
            <input class="zone-texte" type="text">
        </div>
        <div class="bloc-add">
            <p>Type : </p>
            <input class="zone-texte" type="text">
        </div>
        <div class="bloc-add">
            <p>Prix : </p>
            <input class="zone-texte" type="text">
        </div>
        <div class="bouton-selection">
            <a class="bouton_rectangle texte" href="confiserie-gerant.php?id=<?=$id?>">Continuer</a>
            <a class="bouton_rectangle texte" href="confiserie-gerant.php?id=<?=$id?>">Annuler</a>
        </div>
    </div>
</div>
</body>

</html>