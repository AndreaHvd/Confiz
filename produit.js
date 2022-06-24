function saveconfiserie(confiserie){
    localStorage.setItem("produit", JSON.stringify (confiserie));
}

function getconfiserie(){
    let confiserie = localStorage.getItem("confiserie");
    if(confiserie == null){
        return[];
    } else{
        return JSON.parse(confiserie);
    }
}

function addproduits(produit){
    let confiserie = getconfiserie();
    let foundproduit = confiserie.find(p => p.id == produit.id);
    if(foundproduit != undefined){
        foundproduit.quantity++;
    } else{
        produit.quantity = 1;
        confiserie.push(produit);
    }
    saveconfiserie(confiserie);
}
function removeFromconfiserie(produit){
    let confiserie = getconfiserie();
    confiserie = confiserie.filter(p => p.id == produit.id);
    saveconfiserie(confiserie);
}
function changeQuantity(produit, quantity){
    let confiserie = getconfiserie();
    let foundproduit = confiserie.find(p => p.id == produit.id);
    if(foundproduit != undefined){
        foundproduit.quantity += quantity;
    }
    saveconfiserie(confiserie);
}