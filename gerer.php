<?php
include_once("head.php");
$page = "gestion-utilisateur";
include_once("header.php");
$id = $_GET['id'];
?>

<body>
    <?php 
        $sql = "SELECT * FROM utilisateurs WHERE id=$id";
        $user = db_query($sql);
        if($user[0]["type"] == "client"){
            $sql2 = "UPDATE utilisateurs"
            header("location: gestion-utilisateur.php");
        } elseif($user[0]["type"] == "gerant"){
            $user[0]["type"] = "client";
            header("location: gestion-utilisateur.php");
        }
    ?>
</body>

</html>