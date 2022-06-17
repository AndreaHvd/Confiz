<?php
include_once("head.php");
$page = "confiserie-client";
include_once("header.php");
?>

<body>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM stocks WHERE boutique_id='$id'";
    $confiseries = db_query($sql);
    ?>
</body>

</html>