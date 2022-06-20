<?php
include_once("head.php");
$var = $_GET['var'];
$id = $_GET['id'];
$sql = "INSERT INTO stocks (date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id) VALUES (:date_de_peremption, :date_de_mise_en_stock, :boutique_id, :confiserie_id)";
$data = [
    'date_de_peremption' => "2022-06-30",
    'date_de_mise_en_stock' => "2022-06-20",
    'boutique_id' => $id,
    'confiserie_id' => $var,
];
$test=db_insert($sql, $data);

header("location: add-confiserie.php?id=$id");
?>