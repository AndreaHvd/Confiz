<?php
include_once("head.php");
?>

<body class="fond">
        <div class="inscription">
        <form name="inscription" action="add-utilisateur.php" method="post" class="add texte">
            <p>Inscription</p>
            <div class="bloc-add">
                <p>Pseudo : </p>
                <input name="username" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Mot de passe : </p>
                <input name="mdp" class="zone-texte" type="password">
            </div>
            <div class="bloc-add">
                <p>Nom : </p>
                <input name="nom" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Prenom : </p>
                <input name="prenom" class="zone-texte" type="text">
            </div>
            <div class="bloc-add">
                <p>Date de naissance : </p>
                <input name="ddn" class="zone-texte" type="date">
            </div>
            <div class="bouton-selection">
                <input type="submit" name="continuer" class="bouton_rectangle texte" value="Continuer">
                <a class="bouton_rectangle texte" href="index.php">Annuler</a>
            </div>
        </form>
    </div>
</body>