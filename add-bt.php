<?php
include_once("head.php");
include_once("verif.php");

$numero = $_POST['numero'];
$rue = $_POST['rue'];
$codepostal = $_POST['codepostal'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$nom = $_POST['nom'];

if(isset($_POST['continuer'])){
    $sql = "INSERT INTO adresses (numero_rue, nom_adresse, code_postal, ville, pays) VALUES (:numero_rue, :nom_adresse, :code_postal, :ville, :pays)";
    $data = [
        'numero_rue' => $numero,
        'nom_adresse' => $rue,
        'code_postal' => $codepostal,
        'ville' => $ville,
        'pays' => $pays,
    ];
    $adresse_id = db_insert($sql, $data);
    $sql2 = "INSERT INTO boutiques (nom, adresse_id) VALUES (:nom, :adresse_id)";
    $data2 = [
        'nom' => $nom,
        'adresse_id' => $adresse_id,
    ];
    db_insert($sql2, $data2);
    header("location: boutique-gerant.php");
}
?>