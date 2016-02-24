<?php
$db = include("dbmodel.php");                                                                                                                                              

$userid = $_GET["userid"];
$res = NULL;

$stmt = $db->prepare("CALL GetUser(:id);");                                                                                                                                
$stmt->bindParam(":id", $userid, $res);
$stmt->execute();
$res = $stmt->fetch();

echo json_encode($res);
?>
