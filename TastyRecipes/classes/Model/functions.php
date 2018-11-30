<?php
require_once 'database.php';
class LoginAndRegisterSystem{
  function __construct() {
      $database = new database(); // create db connection on start
  }  
  function RegisterUser($first,$last,$uid,$pwd){
      $password = password_hash($password, PASSWORD_DEFAULT);
      $query = mysql_query("select ID from user where uid = '$uid'");// validates user
      $number_rows = mysql_num_rows($query);
      //if there is now row existing with that username it will regiser user into user table
      if($number_rows == 0){
      $result = mysql_query ("insert into user (first, last, uid, pwd) values ('$first, '$last', '$uid', '$pwd')");
  }else {
      return print('<p> ERROR</p>');
  }
  }
      
}
function LoginUser($uid, $password){
    $password= password_verify($password, $hash);
    $result = mysql_query ("select ID from user where uid='$uid' and pwd ='$pwd'");
    $user_data = mysql_fetch_array($result);
    $number_rows = mysql_num_rows($result);
    if($number_rows == 1){
        $_SESSION['Login'] = true;
        $_SESSION['uid'] = $user_data['id'];
        return true;
    }else {
        return false;
    }
}
function getUsername($uid){
    $result = mysql_query("select uid from user where ID ='$uid'");
    $user_data = mysql_fetch_array($result);
    echo $user_data['uid']; // output
}
function getSession(){
    return @$_SESSION['Login']; // checks if logger is already logged in
    
   function LogoutUser(){
       $_SESSION ['Login'] == false;
       session_destroy();
   } 
    
    
    
    
    
}