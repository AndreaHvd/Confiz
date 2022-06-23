<?php
include_once("head.php");
$page = "index";
include_once("header.php");
$id = $_GET['id'];
?>

<body>
        <div class="incription">
            <?php
            $sql = "SELECT * FROM utilisateur";
            $confiseries = db_query($sql);
            $sql = "SELECT * FROM utilisateurs WHERE utilisateur_id=$id";
            $stocks = db_query($sql);
            $check = false;
            foreach ($utilisateurs as $element) {
                for ($i = 0; $i < count($utilisateurs); $i++) {
                    if ($stocks[$i]['utilisateurs_id'] == $element['utilisateurs_id']) {
                        $check = true;
                    }
                }
                if (!$check) {
                    echo ("<div class='carte_inscription'>
                        <div class='bloc2'>
                            <div class='texte_client'>
                                <div class='titre_description'><u>Nom d'utilisateur :</u> " . $element['username'] . "</div>
                                <div class='titre_description'><u>Mot de passe :</u> " . $element['mot_de_passe'] . "</div>
                                <div class='titre_description'><u>Email :</u> " . $element['email'] . "</div>
                                <div class='titre_description'><u>Numero telephone :</u> " . $element['tel'] . "</div>
                                <div class='titre_description'><u>Nom :</u> " . $element['nom'] . "</div>
                                <div class='titre_description'><u>Prenom :</u> " . $element['prenom'] . "</div>
                                <div class='titre_description'><u>Date de naissance :</u> " . $element['ddn'] . "</div>
                            </div>
                        </div>
                        <a class='bouton_rectangle texte' href='add-conf.php?id=$id&var=".$element['confiserie_id']."&page=1'>Ajouter à la boutique</a>
                    </div>");
                }
                $check = false;
            }
            ?>
        </div>
        <form name="inscription" method="post" action="inscription.php?id=<?= $id ?>" class="add texte">
            <p>Inscription</p>
            <div class="bloc-add">
                <p>Nom : </p>
                <input name="username" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Type : </p>
                <input name="mot_de_passe" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Prix : </p>
                <input name="email" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Nom : </p>
                <input name="tel" class="zone-texte" type="texte">
            </div>
            <div class="bloc-add">
                <p>Type : </p>
                <input name="nom" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Prix : </p>
                <input name="prenom" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Prix : </p>
                <input name="ddn" class="zone-texte" type="year">
            </div>
            <div class="bouton-selection">
                <input type="submit" name="continuer" class="bouton_rectangle texte" value="Continuer">
            </div>
        </form>
    </div>
</body>