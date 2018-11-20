<?php
session_start();
include 'dbhlogin.php';


$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
	$_SESSION['id'] = $row['id'];
	
	header("Location: loginsection.php?you are not loggen");
	exit();
}
else{
	
	header("Location: index.php?You are logged in!");
	exit();

}
?>



