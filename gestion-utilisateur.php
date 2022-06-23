<?php
include_once("head.php");
$page = "gestion-utilisateur";
include_once("header.php");
?>

<body>
    <?php 
    $sql = "SELECT * FROM utilisateurs";
        $user = db_query($sql);
        foreach($user as $element) {
        echo ("<div class='bloc'><div class='boutique-gerant texte'>
            <div class='info-boutique'>
                <div class='info'>
                    <p><u>Pseudo : </u>".$element['username']."</p>
                </div>
                <div class='info'>
                    <p>".$element['nom']." ".$element['prenom']."</br> <u>Type : </u>".$element['type']."</p>
                </div>
            </div>
            <a class='bouton_rectangle texte' href='gerer.php?id=".$element['id']."'>Changer les droits</a>
        </div>");
        }
    ?>
</body>

</html>