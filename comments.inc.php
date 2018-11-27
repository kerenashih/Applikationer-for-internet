<?php
include 'dbhlogin.php';

function setComments($conn) {
  if (isset($_POST['commentSubmitBrownies'])) {
    $uid = $_POST['uid'];
    $message = $_POST['message'];

    $sql = "INSERT INTO commentsb (uid, message) VALUES ('$uid', '$message')";
    $result = $conn->query($sql);
  }

  if (isset($_POST['commentSubmitChicken'])) {
    $uid = $_POST['uid'];
    $message = $_POST['message'];

    $sql = "INSERT INTO commentsc (uid, message) VALUES ('$uid', '$message')";
    $result = $conn->query($sql);
  }
}

//get comment from Brownies
function getCommentsB($conn) {
	  $sql = "SELECT * FROM commentsb";
  	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()){
    $id = $row['uid'];
    $sql2 = "SELECT * FROM user WHERE id='$id'";
    $result2 = $conn->query($sql2);
    if ($row2 = $result2->fetch_assoc()) {
    echo "<div class= 'comment-box'><p>";
    echo $row2['uid']."<br><br>";
    echo nl2br($row['message']);
    echo "</p>
   <form class='delete-form' method='POST' action=''>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <button type='submit' name='commentDeleteB'>Delete</button>
   </form>
   
   <form class='edit-form' method='POST' action='editcommentB.php'>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <input type='hidden' name='uid' value='".$row['uid']."'>
    <input type='hidden' name='message' value='".$row['message']."'>
    <button>Edit</button>
   </form>

    </div>";

  }
}
}
deleteCommentsB($conn);


//get commet from sweet and sour chicken
function getCommentsC($conn) {
    $sql = "SELECT * FROM commentsc";
    $result = $conn->query($sql);
  while ($row = $result->fetch_assoc()){
    $id = $row['uid'];
    $sql2 = "SELECT * FROM user WHERE id='$id'";
    $result2 = $conn->query($sql2);
    if ($row2 = $result2->fetch_assoc()) {
    echo "<div class= 'comment-box'><p>";
    echo $row2['uid']."<br><br>";
    echo nl2br($row['message']);
    echo "</p>
   <form class='delete-form' method='POST' action=''>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <button type='submit' name='commentDeleteC'>Delete</button>
   </form>

    <form class='edit-form' method='POST' action='editcommentC.php'>
    <input type='hidden' name='cid' value='".$row['cid']."'>
    <input type='hidden' name='uid' value='".$row['uid']."'>
    <input type='hidden' name='message' value='".$row['message']."'>
    <button>Edit</button>
   </form>

    </div>";
  
  }
}
}
deleteCommentsC($conn);


 function getLogin($conn){
   if (isset($_POST['loginSubmit'])) {
   $uid = mysqli_real_escape_string($conn, $_POST['uid']);
   $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

   $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
   $result = $conn->query($sql);
   if(mysqli_num_rows($result) > 0){
    if ($row = $result->fetch_assoc()){
      $_SESSION['id'] = $row['id'];
      echo "Loginsuccess";
   }  
} else{
  echo "Loginfailed";
}
}

}

function logout() {
  if (isset($_POST['logoutSubmit'])) {
    session_destroy();
    echo "Logout successful!";
    exit();
  }
}

function editCommentB($conn) {
  if (isset($_POST['commentSubmitBrownies'])) {
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $message = $_POST['message'];

    $sql = "UPDATE commentsb SET message='$message' WHERE cid='$cid'";
    $result = $conn->query($sql);
    header("Location: brownies.php");

  }
}
function editCommentC($conn) {
  if (isset($_POST['commentSubmitChicken'])) {
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $message = $_POST['message'];

    $sql = "UPDATE commentsc SET message='$message' WHERE cid='$cid'";
    $result = $conn->query($sql);
    header("Location: Sweetsourchicken.php");

  }
}
function deleteCommentsB($conn){
if (isset($_POST['commentDeleteB'])) {
    $cid = $_POST['cid'];
    
    $sql = "DELETE FROM commentsb WHERE cid='$cid'";
    $result = $conn->query($sql);
    header("Location: brownies.php");

}
}

function deleteCommentsC($conn){
if (isset($_POST['commentDeleteC'])) {
    $cid = $_POST['cid'];
    
    $sql = "DELETE FROM commentsc WHERE cid='$cid'";
    $result = $conn->query($sql);
    header("Location: Sweetsourchicken.php");

}
}
?>