<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventfinder";

$user = $_POST['usr'];
$pass = $_POST['pswd'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	exit();
}

$sql = "SELECT * FROM `user` WHERE UserName = '$user' AND PassWord = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $_SESSION["user"] = $row["UserId"];
		header('Location:/eventfinder/index.php');
    }
    }
 else {
    echo "Please check input!";
}
$conn->close();

?> 