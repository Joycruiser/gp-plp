<?php
$conf = include("config.php");

$pdo = new PDO("mysql:host=" . $conf["DB_HOST"] . ";dbname=". $conf["DB_NAME"], $conf["DB_USER"], $conf["DB_PASSWORD"]);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
return $pdo;

?>
