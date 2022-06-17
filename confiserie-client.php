<?php
include_once("head.php");
$page = "confiserie-client";
include_once("header.php");
?>

<body>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM stocks WHERE boutique_id='$id'";
    $confiseries = db_query($sql);
    ?>
$sql = "SELECT * FROM confiseries NATURAL JOIN adresses";
    $confiseries = db_query($sql);
    echo ("<div class='carte_boutique'>
            <div class='texte'>".$boutique[0]['nom']."</div>
            <div class='photo_boutique'></div>
            <div class='adresse_boutique'>".$confiseries[0]['numero_rue']." ".$confiseries[0]['nom_adresse']."</br>"
            .$confiseries[0]['code_postal']." ".$confiseries[0]['ville'].$confiseries[0]['pays']."</div></div>");

    foreach($confiseries_id as $confiseries) {
    echo $confiseries['confiseries'] . '<br />';
    }

?>
</body>

</html>