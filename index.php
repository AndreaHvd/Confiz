<?php
include_once("head.php");
?>
    <body class="login">
        <h1 class="titre">Confiz</h1>
        <div class="rectangle_marron">
            <div class="rectangle_connexion">
                <div class="bloc_connexion">
                    <p class="texte">Nom:</p>
                    <form class="connexion" name="nom">
                        <input class="connexion" type="text">
                    </form>
                </div>
                <div class="bloc_connexion">
                    <p class="texte">Mot de passe:</p>
                    <form class="connexion" name="mdp">
                        <input class="connexion" type="text">
                    </form>
                </div>
            </div>
            <button class="bouton bouton-orange texte">
                Connexion
            </button>
        </div>
    </body>
</html>