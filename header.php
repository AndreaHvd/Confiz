<header>
    <div class="bouton_retour_acceuil">Confiz</div>
    <?php
    if ($page == "confiserie-client"){
        echo("<input type='submit' class='bouton bouton-blanc' value='Nos Boutiques'>");
    } elseif ($page == "confiserie-gerant"){
        echo("<input type='submit' class='bouton bouton-blanc' value='Retour Boutiques'>");
    } 
    ?>
    <a href="deco.php" class='bouton bouton-blanc texte'>Deconnexion</a>
</header>
<div class="sous_header"></div>