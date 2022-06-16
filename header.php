<header>
    <div class="bouton_retour_acceuil">Confiz</div>
    <?php
    if ($page == "confiserie-client"){
        echo("<input class='barre_recherche' type='text' placeholder='Rechercher'>
        <input type='submit' class='bouton bouton-blanc' value='Nos Boutiques'>");
    } elseif ($page == "confiserie-gerant"){
        echo("<input type='submit' class='bouton bouton-blanc' value='Retour Boutiques'>");
    } elseif ($page == "boutique-client"){
        echo("<input class='barre_recherche' type='text' placeholder='Rechercher une boutique'>");
    } 
    ?>
    <input type='submit' class='bouton bouton-blanc' value='Deconnexion'>
</header>
<div class="sous_header"></div>