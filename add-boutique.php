<?php
include_once("head.php");
$page = "boutique-gerant";
include_once("header.php");
?>

<body>
    <div class="main-container">
        <form name="add-boutique" action="add-bt.php" method="post">
            <div class="add texte">
                <p>Nouvelle Boutique</p>
                <div class="bloc-add">
                    <p>Nom : </p>
                    <input name="nom" class="zone-texte" type="text" required>
                </div>
                <div class="bloc-add">
                    <p>Adresse : </p>
                    <div class="bloc-zone-texte">
                        <input name="numero" class="zone-texte" type="text" placeholder="Numéro de rue" required>
                        <input name="rue" class="zone-texte" type="text" placeholder="Rue" required>
                        <input name="codepostal" class="zone-texte" type="text" placeholder="Code Postal" required>
                        <input name="ville" class="zone-texte" type="text" placeholder="Ville" required>
                        <input name="pays" class="zone-texte" type="text" placeholder="Pays" required>
                    </div>
                </div>
                <div class="bouton-selection">
                    <input name="continuer" type="submit" class="bouton_rectangle texte" value="Continuer">
                    <a class="bouton_rectangle texte" href="boutique-gerant.php">Annuler</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>.
