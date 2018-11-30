<?php
session_start();
require_once 'functions.php';
$user = new LoginAndRegisterSystem();
 $uid = $_SESSION['uid'];
 if(!$user->getSession()){
     echo 'You are not logged in, log in to comment';
 }
 if(@$_GET['quit']=='logout'){
     $user ->LogoutUser();
     echo 'You are logged out';
 }
	?>
	<div class="menu">

	<ul>
		<li class="menu"><a href="index.php">Home</a></li>
		<li class="menu"><a href="Calendar.php">Calendar</a></li>
		<li class="menu"><a href="brownies.php">Brownies</a></li>
		<li class="menu"><a href="Sweetsourchicken.php">Sweet & Sour Chicken</a></li>
		<li class="menu"><a href="loginsection.php">Login</a></li>
                <li class="menu"><a href="signup.php">Sign Up</a></li>
                <a href="quit=logout">logout</a>
 
	</ul>
	</div>