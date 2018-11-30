<?php
include 'dbhlogin.php';

function deleteComments($conn){
if (isset($_POST['commentDelete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM comments WHERE id ='$id";
    $result = $conn->query($sql);
    header("Location: commentsection.php");
}

}
?>