<?php

   date_default_timezone_set('Europe/Berlin');
   include 'dbhlogin.php';
   include 'comments.inc.php';
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<title>comment</title>
    
</head>

<body>


<br><br>

<h3>Log in to post a comment:</h3>


<form action="" method="POST">
    <input type="text" name="uid" placeholder="Username"><br>
  <input type="Password" name="pwd" placeholder="Password">
  <button type="submit" name="loginSubmit">Login</button>
  <br>
<?php
getLogin($conn);
?>
  </form>
  <form method='POST' action="">
    <button type="submit" name="logoutSubmit">Logout</button>
  </form>
<?php
logout($conn);
?>
<?php

if (isset($_SESSION['id'] )) {
  echo "<form class='button-comment' method='POST' action=''>
          <input type='hidden' name='uid' value='".$_SESSION['id']."'>
       <textarea name='message'></textarea> <br> 
       <button type='submit' name='commentSubmitBrownies'> Comment </button>  
 </form>";

  } else {
   echo "You need to login to comment!";
} 
    
    setComments($conn);
 
 ?>
<h3>Other comments:</h3> 
<br>

<?php
 getCommentsB($conn);
 
?>
</body>
</html>

