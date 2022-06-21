<?php
include_once("head.php");
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
    $sql2 = "INSERT INTO stocks (date_de_peremption, date_de_mise_en_stock, boutique_id, confiserie_id) VALUES (:date_de_peremption, :date_de_mise_en_stock, :boutique_id, :confiserie_id)";
    $data2 = [
        'date_de_peremption' => "2022-06-30",
        'date_de_mise_en_stock' => "2022-06-21",
        'boutique_id' => $id,
        'confiserie_id' => $var,
    ];
    for($i=0; $i < $_POST['number']; $i++){
        db_insert($sql2, $data2);
    }
    header("location: confiserie-gerant.php?id=$id");
}

if(isset($_POST['delete'])){
    $sql3 = "SELECT id FROM stocks WHERE boutique_id = '$id' AND confiserie_id = '$var' ORDER BY date_de_peremption DESC";
    $stock = db_query($sql3);
    for ($i = 0; $i < $_POST['number']; $i++) {
        $sql4 = "DELETE FROM stocks WHERE id='" . $stock[$i]['id'] . "'";
        $results = db_query($sql4);
    }
    header("location: confiserie-gerant.php?id=$id");
}
?>