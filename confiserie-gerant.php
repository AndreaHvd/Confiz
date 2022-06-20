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
        echo("<div class='bloc'><div class='confiserie-gerant texte'>
                <div class='img-confiserie'>
                    <img src='https://via.placeholder.com/200x250' alt='confiserie'>
                </div>
                <div class='info-confiserie'>
                    <div class='info'>
                        <p><u>Nom :</u> ".$element['nom']."</p>
                    </div>
                    <div class='info'>
                        <p><u>Stock :</u> </p>
                    </div>
                    <div class='info'>
                        <p><u>Prix :</u> ".$element['prix']."€</p>
                    </div>
                    <div class='gestion-stock'>
                        <input type='submit' class='bouton-stock bouton-vert texte' value='+'>
                        <input type='number' class='choix-nombre'>
                        <input type='submit' class='bouton-stock bouton-rouge texte' value='-'>
                    </div>
                </div>
                <div class='delete-all'>
                    <input type='submit' class='bouton-stock bouton-rouge texte' value='X'>
                </div>
            </div></div>");
    }
    ?>  
<div class="bloc">
    <a class="bouton_rectangle texte" href="add-confiserie.php?id=<?=$id?>">Ajouter une confiserie</a>
</div>
</body>

</html>