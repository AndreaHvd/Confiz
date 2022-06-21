<?php
include_once("head.php");
$id = $_GET['id'];
$sql = "DELETE FROM adresses WHERE boutique_id=$id";
db_query($sql);
$sql2 = "DELETE FROM boutiques WHERE boutique_id=$id";
db_query($sql2);
header("location: boutique-gerant.php");
?>