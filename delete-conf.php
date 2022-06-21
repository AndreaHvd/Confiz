<?php
include_once("head.php");
$var = $_GET['var'];
$id = $_GET['id'];

if(isset($_GET['page'])){
    $sql = "DELETE FROM stocks WHERE confiserie_id=$var";
    db_query($sql);
    header("location: confiserie-gerant.php?id=$id");
}


?>