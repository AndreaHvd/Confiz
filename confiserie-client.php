<?php
include_once("head.php");
$page = "confiserie-client";
include_once("header.php");
?>

<body>
    <div class="bloc">
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM stocks NATURAL JOIN confiseries WHERE boutique_id='$id' GROUP BY nom";
    $confiseries = db_query($sql);

    foreach($confiseries as $element){
        echo("<div class='carte_produit'>
        <div class='photo_produit'>
        </div>
            <div class='produit texte'>
                <div class='titre_description'><u>Nom :</u> ".$element['nom']."</div>
                <div class='titre_description'><u>Type :</u> ".$element['type']."</div>
                <div class='titre_description'><u>Prix :</u> ".$element['prix']."€</div>
            </div>
        </div>");
    }
    ?>
    </div>
</body>

</html>