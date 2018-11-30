<?php
session_start(); 
  require_once '/Model/functions.php';
  $user = new LoginAndRegisterSystem(); 
 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
      $login = $user->LoginUser($_POST['uid'],$_POST['pwd']);
      if ($login){
          header("Location:home.php");
      } else {
          echo '<o>Error: username or password to mot match</p>';//Error massage if user can not login
      }
  }