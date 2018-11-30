<?php

session_start();
require_once 'functions.php';
if($user->getSession()){
    header("Location:home.php");
}
  if ($_SERVER["REQUST_METHOD"] == "POST"){
      $register = $user->RegisterUser($_POST['first'],$_POST['last'],$_POST['uid'],$_POST['pwd']);
      if($register){
          echo 'You are now registerd';
      } else {
          echo 'Error: Username already exist';    
      }
  }

