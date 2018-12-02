<?php

include 'functions.php';
$user = new LoginAndRegisterSystem();

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $register = $user->RegisterUser($_POST['first'],$_POST['last'],$_POST['uid'],$_POST['pwd']);
      if($register){
          echo ("Location: home.php") ;
      } else {
          echo 'Error: Username already exist';    
      }
  }

