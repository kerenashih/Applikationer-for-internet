
<?php
  session_start();
  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<div class="menu">
	<ul>
		<li class="menu"><a href="loginsection.php">Login</a></li>
	</ul>
</div>
<h1 ><ins>Login</ins></h1>
<body>
	
	<form class= signup-form action="login.php" method="POST">
		<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">Login</button>

	</form>

<form class="signup-form" action="signup.php">
	<button>Sign Up</button>
</form>

</form>
</body>
</html>