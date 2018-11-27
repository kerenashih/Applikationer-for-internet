<?php
session_start();


include 'dbhlogin.php';
if (isset($_POST['submit'])){

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

//error handlers
//check for empty fields
if (empty($first) || empty($last) || empty($uid) || empty($pwd) ) {
   header("Location: signup.php?signup=empty");
	exit();   
}
 else{
    //check if input characters are valid
    if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
    	$msg = 'please enter first and last name';
    	$col = 'red';
	exit();
    } else {
   $sql = "SELECT * FROM user WHERE uid='$uid'";
   $result = mysqli_query($conn, $sql);
   $resultcheck = mysqli_num_rows($result);
   if ($resultCheck > 1){
   	header("Location: signup.php?signup=usertaken");
	exit();
   } else { 
  //hashing the password
   	$pwd = md5($pwd); 
   	//insert the user onto the database
   	$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd');";
   	mysqli_query($conn, $sql);
   	$_SESSION['uid'] = $uid;
   	$_SESSION['success'] = "You are registerd";
   	header("Location: index.php?"); 
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