<?php

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
   
  }
}
}