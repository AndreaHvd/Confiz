<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$settings = parse_ini_file("db.ini", TRUE);

//Database connection constants
//configure here the database connection
define('DB_DRIVER', $settings['database']['driver']);
define('DB_HOST', $settings['database']['host']);
define('DB_PORT', $settings['database']['port']);
define('DB_USERNAME', $settings['database']['username']);
define('DB_PASSWORD', $settings['database']['password']);
define('DB_DATABASE', $settings['database']['schema']);

//try to connect with the server using the database connection information in defined in constants.php
//the first parameter of PDO must be a string like "mysql:host=$host;dbname=$db;port=$port"
try {
    $DB = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_DATABASE . ";port=" . DB_PORT, DB_USERNAME, DB_PASSWORD);
} catch (Exception $ex) {
    echo ($ex->getMessage());
    die;
}

function db_query($query){
    global $DB;
    $sql = $query;
    $results = [];

    try {
        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

    return $results;
}

// Cette fonction renvoie l'ID de l'élément qui vient d'être inséré en base
// Elle prend en premier paramètre la requête SQL
// Elle prend en second paramètre un tableau clef valeur des données à insérér
// Voir https://phpdelusions.net/pdo_examples/insert pour de la doc
function db_insert($query, $data){
    global $DB;
    $sql = $query;
    $id = null;
    try {
        $stmt = $DB->prepare($sql);
        $stmt->execute($data);
        $id = $DB->lastInsertId();
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    return $id;
}
?>