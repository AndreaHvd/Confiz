<?php
include_once("head.php");
session_start();
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM utilisateurs WHERE username='$username'";
    $login = db_query($sql);
    $password = hash("md5", $password);
    if ($login[0]['username'] == $username){
        if ($login[0]['password'] == $password){
            $_SESSION['username'] = $username;
            $_SESSION['loged'] = true;
            if ($login[0]['type'] == "gerant"){
                header("location: boutique-gerant.php");
            } else {
                header("location: boutique-client.php");
            }
        }
    }
}
?>
    <body class="login fond">
        <h1 class="titre">Confiz</h1>
        <form class="rectangle_marron" name="connexion" action="" method="post">
            <div class="rectangle_connexion">
                <div class="bloc_connexion">
                    <p class="texte">Nom:</p>
                    <input name="username" class="connexion" type="text">
                </div>
                <div class="bloc_connexion">
                    <p class="texte">Mot de passe:</p>
                    <input name="password" class="connexion" type="password">
                </div>
            </div>
            <input type="submit" class="bouton bouton-orange texte" value="Connexion">
            <p class="texte">Pas encore de compte ? <a class="texte" href="inscription.php">Inscription</a></p>
        </form>
    </body>
</html>