<?php
$db = include("dbmodel.php");                                                                                                                                              

$postjson = file_get_contents('php://input');
$postobj = json_decode($postjson, true);


$res = NULL;

$stmt = $db->prepare("CALL CreateUser(:username, :pw, :email, :name, :imagepath);");
$stmt->bindParam("username",   $postobj["username"],   PDO::PARAM_STR,  500);
$stmt->bindParam("pw",         $postobj["pw"],         PDO::PARAM_STR,  500);
$stmt->bindParam("email",      $postobj["email"],      PDO::PARAM_STR,  500);
$stmt->bindParam("name",       $postobj["name"],       PDO::PARAM_STR,  500);
$stmt->bindParam("imagepath",  $postobj["imagepath"],  PDO::PARAM_STR,  2000);

$stmt->execute();
?>
