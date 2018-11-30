<?php
  include 'Controller/registerUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
        <?php require_once ("./fragments/menu.php"); ?>
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
</head>
<h1 ><ins>Sign Up</ins></h1>

<body>
<form class ="signup-form" action="" method="POST">
	<input type="text" name="first" placeholder="firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<input type="submit" value="Sign Up"></input>
</form>

</body>
</html>

