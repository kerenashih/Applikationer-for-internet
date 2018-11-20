<?php
session_start();

if (isset($_POST['submit'])){


include 'dbhlogin.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//error handlers
//check for empty fields
if (empty($first) || empty($last) || empty($uid) || empty($pwd) ) {
   header("Location: signup.php?signup=empty");
	exit();  
} else{
    //check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
    	header("Location: signup.php?signup=invalid");
	exit();
    } else {
   $sql = "SELECT * FROM user WHERE udi='$uid'";
   $result = mysqli_query($conn, $sql);
   $resultcheck = mysqli_num_rows($result);

   if ($resultCheck > 0){
   	header("Location: signup.php?signup=usertaken");
	exit();
   } else { 
  //hashing the password
   	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
   	//insert the user onto the database
   	$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$hashedPwd')";
   	mysqli_query($conn, $sql);
   	header("Location: index.php?signup=success");
	exit();

   }
    }
  }
} else{
	header("Location: signup.php");
	exit();
}

$sql = "INSERT INTO user (first, last, uid, pwd) 
VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare ($stmt, $sql)) {
	echo "SQL error";
} else {
	mysqli_stmt_bind_param($stmt, "ssss", $first, $last, $uid, $pwd);
	mysqli_stmt_execute($stmt);
}

//header("Location: index.php");
?>