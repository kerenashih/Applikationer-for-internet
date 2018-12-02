<?php

// Logout
if (isset($_POST['logoutSubmit'])) {
    session_destroy();
    echo "Logout successful!";
  }
 
?>

