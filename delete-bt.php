<?php
include_once("head.php");
include_once("verif.php");
$id = $_GET['id'];
$sql = "SELECT * FROM boutiques WHERE boutique_id=$id";
$adresse_id = db_query($sql);
$sql = "DELETE FROM adresses WHERE adresse_id=".$adresse_id[0]['adresse_id'];
db_query($sql);
header("location: boutique-gerant.php");
?>