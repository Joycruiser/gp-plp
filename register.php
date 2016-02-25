<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventfinder";

$name = $_POST['name'];
$usrname = $_POST['usrname'];
$pswd = $_POST['pswd'];
$email = $_POST['email'];
$date = date('Y-m-d H:i:s');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	exit();
}

$sql = "INSERT INTO `eventfinder`.`user` (`UserId`, `UserName`, `PassWord`, `Email`, `Name`, `ImagePath`, `DateCreated`, `IsDeleted`) 
VALUES (NULL, '$usrname', '$pswd', '$email', '$name', NULL, '$date', b'0');";

if ($conn->query($sql) === TRUE) 
	{
		echo "Profile created, you can now login...";
	} 
else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

$conn->close();
?> 