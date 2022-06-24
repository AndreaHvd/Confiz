<?php
include_once("head.php");
$page = "confiserie-gerant";
include_once("header.php");
include_once("verif.php");
$id = $_GET['id'];
?>

<body>
    <div class="main-container">
        <div class="add-confiseries taille scroll texte">
            <?php
            $sql = "SELECT * FROM confiseries";
            $confiseries = db_query($sql);
            $sql = "SELECT * FROM stocks WHERE boutique_id=$id GROUP BY confiserie_id";
            $stocks = db_query($sql);
            $check = false;
            foreach ($confiseries as $element) {
                for ($i = 0; $i < count($stocks); $i++) {
                    if ($stocks[$i]['confiserie_id'] == $element['confiserie_id']) {
                        $check = true;
                    }
                }
                if (!$check) {
                    echo ("<div class='carte-produit-gerant'>
                        <div class='bloc2'>
                            <div class='photo_produit'>
                            </div>
                            <div class='produit texte'>
                                <div class='titre_description'><u>Nom :</u> " . $element['nom'] . "</div>
                                <div class='titre_description'><u>Type :</u> " . $element['type'] . "</div>
                                <div class='titre_description'><u>Prix :</u> " . $element['prix'] . "€</div>
                            </div>
                        </div>
                        <a class='bouton_rectangle texte' href='add-conf.php?id=$id&var=".$element['confiserie_id']."&page=1'>Ajouter à la boutique</a>
                    </div>");
                }
                $check = false;
            }
            ?>
        </div>
        <form name="addconf" method="post" action="add-conf.php?id=<?= $id ?>" class="add texte">
            <p>Nouvelle confiserie</p>
            <div class="bloc-add">
                <p>Nom : </p>
                <input name="nomconf" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Type : </p>
                <input name="typeconf" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Prix : </p>
                <input name="prixconf" class="zone-texte" type="text">
            </div>
            <div class="bouton-selection">
                <input type="submit" name="continuer" class="bouton_rectangle texte" value="Continuer">
                <a class="bouton_rectangle texte" href="confiserie-gerant.php?id=<?= $id ?>">Annuler</a>
            </div>
        </form>
    </div>
</body>

</html>