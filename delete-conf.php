<?php
include_once("head.php");
$id = $_GET['id'];
$var = $_GET['var'];
$sql = "DELETE FROM stocks WHERE confiserie_id=$var";
db_query($sql);
header("location: confiserie-gerant.php?id=$id");
?>