<?php
include_once("head.php");
include_once("verif.php");
$var = $_GET['var'];
$id = $_GET['id'];

if(isset($_GET['page'])){
    $sql = "INSERT INTO stocks (date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id) VALUES (:date_de_peremption, :date_de_mise_en_stock, :boutique_id, :confiserie_id)";
    $data = [
        'date_de_peremption' => "2022-06-30",
        'date_de_mise_en_stock' => "2022-06-20",
        'boutique_id' => $id,
        'confiserie_id' => $var,
    ];
    $test=db_insert($sql, $data);
    header("location: add-confiserie.php?id=$id");
}


if(isset($_POST['add'])){
    $sql = "INSERT INTO stocks (date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id) VALUES (:date_de_peremption, :date_de_mise_en_stock, :boutique_id, :confiserie_id)";
    $data = [
        'date_de_peremption' => "2022-06-30",
        'date_de_mise_en_stock' => "2022-06-21",
        'boutique_id' => $id,
        'confiserie_id' => $var,
    ];
    for($i=0; $i < $_POST['number']; $i++){
        db_insert($sql, $data);
    }
    header("location: confiserie-gerant.php?id=$id");
}

if(isset($_POST['delete'])){
    $sql = "SELECT id FROM stocks WHERE boutique_id = '$id' AND confiserie_id = '$var'";
    $stock = db_query($sql);
    for ($i = 0; $i < $_POST['number']; $i++) {
        $sql = "DELETE FROM stocks WHERE id='" . $stock[$i]['id'] . "'";
        $results = db_query($sql);
    }
    header("location: confiserie-gerant.php?id=$id");
}

$nom = $_POST['nomconf'];
$type = $_POST['typeconf'];
$prix = $_POST['prixconf'];

if(isset($_POST['continuer'])){
    $sql = "INSERT INTO confiseries (nom, type, prix) VALUES (:nom, :type, :prix)";
    $data = [
        'nom' => $nom,
        'type' => $type,
        'prix' => $prix,
    ];
    $confiserie_id = db_insert($sql, $data);
    $sql = "INSERT INTO stocks (date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id) VALUES (:date_de_peremption, :date_de_mise_en_stock, :boutique_id, :confiserie_id)";
    $data = [
        'date_de_peremption' => "2022-06-30",
        'date_de_mise_en_stock' => "2022-06-22",
        'boutique_id' => $id,
        'confiserie_id' => $confiserie_id,
    ];
    db_insert($sql, $data);
    header("location: confiserie-gerant.php?id=$id");
}
?>