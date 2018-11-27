<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
   
   <title>Index</title>
</head>
 

  <h1><ins>Tasty Recipes</ins></h1>
	<?php require_once ("menu.php"); ?>
	<div class="menu"> 
    <?php if (isset($_SESSION['success'])):?>
      <h3> <?php echo $_SESSION['success'];
      unset($_SESSION['success']); 
      ?>
       </h3>
    <?php endif ?>

  <?php if (isset($_SESSION["uid"])): ?>
    <p>Welcome <strong><?php echo $_SESSION['uid']; ?></strong></p> 
  <?php endif ?>

	<h3> Hello food lovers!! I welcome you to my food website. Here you will find my favorite recipes that I like to make.
	 With a calendar you can see what you need to eat during the month to help you keep a healthy lifestyle.</h3>
 
   <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS946a8Hk4NPx7yUvDkx8MIaeShquCnGoLI1DY5Z6u5ASPv-Qn5kg" alt="bild"/>
    
	</div>
 
 
</html>