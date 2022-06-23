<?php
include_once("head.php");
$id = $_GET['id'];
$sql = "SELECT * FROM boutiques WHERE boutique_id=$id";
$adresse_id = db_query($sql);
$sql2 = "DELETE FROM boutiques WHERE boutique_id=$id";
db_query($sql2);
$sql3 = "DELETE FROM adresses WHERE adresse_id=".$adresse_id[0]['adresse_id'];
db_query($sql3);
header("location: boutique-gerant.php");
?>