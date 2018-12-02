<?php
session_start();
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Sign up</title>
        <?php require_once ("menu.php"); ?>
        
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
</head>
<h1 ><ins>Sign Up</ins></h1>

<body>
    <form class ="signup-form" action="registerUser.php" method="POST">
	<input type="text" name="first" placeholder="firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit" value="Sign Up"></button>
</form>

</body>


