<?php
session_start();
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Fragments/mystyle.css">
	<title>comment</title>
    
</head>
<body>
<br><br>

<h3>Log in to post a comment:</h3>


<form action="loginUser.php" method="POST">
    <input type="text" name="uid" placeholder="Username"><br>
  <input type="Password" name="pwd" placeholder="Password">
  <button type="submit" value="login">Login</button>
  <br>
  </form>

<form method='POST' action="logout.php">
    <button type="submit" name="logoutSubmit">Logout</button>
  </form>


<h3>Other comments:</h3> 
<br>

<?php
 //getCommentsB($conn);
 
?>
</body>
</html>
