<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<div class="menu">
	<ul>
		<li class="menu"><a href="index.php">Home</a></li>
		<li class="menu"><a href="Calendar.php">Calendar</a></li>
		<li class="menu"><a href="brownies.php">Brownies</a></li>
		<li class="menu"><a href="Sweetsourchicken.php">Sweet & Sour Chicken</a></li>
	</ul>
</div>
<h1 ><ins>Sign Up</ins></h1>
<body>
<form class ="signup-form" action="signup.inc.php" method="POST">
	<input type="text" name="first" placeholder="firstname"><br>
	<input type="text" name="last" placeholder="Lastname"><br>
	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit" name="submit">Sign up</button>
</form>

</body>
</html>