<?php
 include './controller/loginUser.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
</head>
<?php require_once ("./fragments/menu.php"); ?>
<h1 ><ins>Login</ins></h1>
<body>
	
	<form class= signup-form action="" method="POST">
        <input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
        <input type="submit" value="Login">

	</form>

</form>
</body>
</html>