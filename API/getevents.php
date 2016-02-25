<?php
$db = include("dbmodel.php");

$res = $db->query("CALL GetAllEvents();")->fetchAll();

echo json_encode($res);
?>
