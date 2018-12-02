<?php
session_start(); 
  require_once 'functions.php';
  $user = new LoginAndRegisterSystem(); 

if($_SERVER["REQUEST_METHOD"] == "POST"){
      $login = $user->LoginUser($_POST['uid'],$_POST['pwd']);
      if ($login){
  echo "<form class='button-comment' method='POST' action=''>
          <input type='hidden' name='uid' value='".$_SESSION['id']."'>
       <textarea name='message'></textarea> <br> 
       <button type='submit' name='commentSubmitBrownies'> Comment </button>  
 </form>";

  } else {
   echo "login not successful!";
} 
}
    
 
 ?>