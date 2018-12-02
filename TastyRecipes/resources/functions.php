<?php
require_once 'database.php';
class LoginAndRegisterSystem{
  function __construct($database) {
      $database = new Database(); // create db connection 
  }  
  function RegisterUser($first,$last,$uid,$pwd){
      $pwd = password_hash($pwd, PASSWORD_DEFAULT);
      $query = mysqli_query("select ID from user where uid = '$uid'");// validates user
      $number_rows = mysqli_num_rows($query);
      //if there is no row existing with that username it will regiser user into user table
      if($number_rows == 0){
      $result = mysqli_query ("INSERT INTO user (first, last, uid, pwd) values ('$first, '$last', '$uid', '$pwd')");
  }else {
      return print('<p> ERROR</p>');
  }
  }
      
}
function LoginUser($uid, $pwd){
    $pwd= ($pwd);
    $result = mysqli_query ("SELECT id FROM user WHERE uid='$uid' and pwd ='$pwd'");
    $user_data = mysqli_fetch_array($result);
    $number_rows = mysqli_num_rows($result);
    if($number_rows == 1){
        $_SESSION['Login'] = true;
        $_SESSION['uid'] = $user_data['id'];
        return true;
    }else {
        return false;
    }
}
function getUsername($uid){
    $result = mysqli_query("SELECT uid FROM user WHERE id ='$uid'");
    $user_data = mysqli_fetch_array($result);
    echo $user_data['uid']; // output
}
function getSession(){
    return @$_SESSION['Login']; // checks if logger is already logged in
    
   function LogoutUser(){
       $_SESSION ['Login'] == false;
       session_destroy();
   } 
    
}