<?php
session_start();              // Start session to access it
session_unset();              // Unset all session variables
session_destroy();            // Destroy the session

// Delete the cookie by setting expiration time in the past
setcookie("username", "", time() - 3600, "/"); 

// Redirect to login page (adjust path if needed)
header("Location: ../View/login.php");
exit();
?>
