<?php
include_once("head.php");
$page = "boutique-gerant";
include_once("header.php");
?>

<body>
    <div class="main-container">
        <form>
            <div class="add texte">
                <p>Nouvelle Boutique</p>
                <div class="bloc-add">
                    <p>Nom : </p>
                    <input class="zone-texte" type="text">
                </div>
                <div class="bloc-add">
                    <p>Adresse : </p>
                    <div class="bloc-zone-texte">
                        <input class="zone-texte" type="text" placeholder="Adresse">
                        <input class="zone-texte" type="text" placeholder="Code Postal">
                        <input class="zone-texte" type="text" placeholder="Ville">
                        <input class="zone-texte" type="text" placeholder="Pays">
                    </div>
                </div>
                <div class="bouton-selection">
                    <input type="submit" class="bouton_rectangle texte" value="Continuer">
                    <a class="bouton_rectangle texte" href="boutique-gerant.php">Annuler</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>.
