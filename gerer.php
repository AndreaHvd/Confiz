<?php
include_once("head.php");
$page = "gestion-utilisateur";
include_once("header.php");
include_once("verif.php");
$id = $_GET['id'];
?>

<body>
    <?php
    $sql = "SELECT * FROM utilisateurs WHERE id=$id";
    $user = db_query($sql);

    if ($user[0]["type"] == "client") {
        $sql2 = "UPDATE utilisateurs SET type = 'gerant' WHERE id=$id";
        db_query($sql2);
        header("location: gestion-utilisateur.php");
    };

    if ($user[0]["type"] == "gerant") {
        $sql3 = "UPDATE utilisateurs SET type = 'client' WHERE id=$id";
        db_query($sql3);
        header("location: gestion-utilisateur.php");
    };

    ?>
</body>

</html>