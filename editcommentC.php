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
    
</head>

<body>

 <?php
   $cid = $_POST['cid'];
 $uid = $_POST['uid'];
 $message = $_POST['message'];
 
 echo "<form class='button-comment' method='POST' action=''>
          <input type='hidden' name='cid' value='".$cid."'>
          <input type='hidden' name='uid' value='".$uid."'>
   <textarea name='message'>".$message."</textarea> <br> 
     <button type='submit' name='commentSubmitChicken'> Edit </button> 
 </form>";
    editcommentC($conn);
  
  
 ?>
 

</body>
</html>
