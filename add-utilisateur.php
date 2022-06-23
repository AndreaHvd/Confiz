<?php
    include_once("head.php");

    $username = $_POST['username'];
    $password = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ddn = $_POST['ddn'];
    $ddn = date('Y-m-d',strtotime($ddn));

    if(isset($_POST['continuer'])){ 
        $sql = "INSERT INTO utilisateurs (username, password, type, nom, prenom, ddn) VALUES (:username, :password, :type, :nom, :prenom, :ddn)";
        $data = [
            'username' => $username,
            'password' => md5($password),
            'type' => "client",
            'nom' => $nom,
            'prenom' => $prenom,
            'ddn' => $ddn,
        ];
        db_insert($sql, $data);
        header("location: index.php");
    }
    ?>