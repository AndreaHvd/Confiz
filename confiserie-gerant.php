<?php
include_once("head.php");
$page = "confiserie-gerant";
include_once("header.php");
?>

<body>

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM stocks NATURAL JOIN confiseries WHERE boutique_id='$id' GROUP BY nom";
    $confiseries = db_query($sql);


    foreach($confiseries as $element){   
        $stock = db_query("SELECT count(*) FROM stocks WHERE confiserie_id=".$element['confiserie_id']." AND boutique_id=$id");
        echo("<div class='bloc'><div class='confiserie-gerant texte'>
                <div class='img-confiserie'>
                    <img src='https://via.placeholder.com/200x250' alt='confiserie'>
                </div>
                <div class='info-confiserie'>
                    <div class='info'>
                        <p><u>Nom :</u> ".$element['nom']."</p>
                    </div>
                    <div class='info'>
                        <p><u>Stock :</u> ".$stock[0][0]."</p>
                    </div>
                    <div class='info'>
                        <p><u>Prix :</u> ".$element['prix']."€</p>
                    </div>
                    <form method='post' action='add-conf.php?id=$id&var=".$element['confiserie_id']."' name='gestion' class='gestion-stock'>
                        <input type='submit' name='add' class='bouton-stock bouton-vert texte' value='+'>
                        <input type='number' name='number' class='choix-nombre' required>
                        <input type='submit' name='delete' class='bouton-stock bouton-rouge texte' value='-'>
                    </form>
                </div>
                <div class='delete-all'>
                    <a class='bouton-stock bouton-rouge texte' href='delete-conf.php?id=$id&var=".$element['confiserie_id']."'>X</a>
                </div>
            </div></div>");
    }
    ?>  
<div class="bloc">
    <a class="bouton_rectangle texte" href="add-confiserie.php?id=<?=$id?>">Ajouter une confiserie</a>
</div>
</body>

</html>