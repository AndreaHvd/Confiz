<header>
    <div class="bouton_retour_acceuil">Confiz</div>
    <?php
    if ($page == "confiserie-client"){
        echo("<a class='bouton bouton-blanc texte' href='boutique-client.php'>Nos boutiques<a>");
    } elseif ($page == "confiserie-gerant"){
        echo("<a class='bouton bouton-blanc texte' href='boutiques-gerant.php'>Retour Boutique</a>");
    } 
    ?>
    <a href="deco.php" class='bouton bouton-blanc texte'>Deconnexion</a>
</header>
<div class="sous_header"></div>