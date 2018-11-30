<?php
/*session_start();
require_once 'Model/functions.php';
  $user = new LoginAndRegisterSystem(); 
  //validates if user is already logged in and redirect the to home page.
  if($user ->getSession()){*/
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

<h3>Post a comment:</h3>




<?php
  
  
if (isset($_SESSION['id'] )) {
  echo "<form class='button-comment' method='POST' action=''>
          <input type='hidden' name='uid' value='".$_SESSION['id']."'>
       <textarea name='message'></textarea> <br> 
       <button type='submit' name='commentSubmit'> Comment </button>  
 </form>";

  } else {
   echo "You need to login to comment!";
} 
    
 
 ?>
<h3>Other comments:</h3> 


</body>
</html>

