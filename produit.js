function saveproduit(produit){
    localStorage.setItem("produit", produit);
}

function getproduit(){
    return localStorage.getItem("produit");
}