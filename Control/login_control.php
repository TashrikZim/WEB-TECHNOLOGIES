<?php
include "../Model/data.php";
session_start(); // Start the session

$uname_error = "";
$pass_error = "";
$uname = $_POST["uname"];
$pass = $_POST["passw"];

$conn = createCon();
$result = checkLogin($conn, $uname, $pass);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['uname'] = $uname; // Store in session instead of GET
    setcookie("username", $uname, time() + (86400 * 1), "/"); // Store in cookie for 1 day
    header("Location: ../View/dashboard.php"); // No longer sending uname via GET
} else {
    echo "<h2>Invalid Username or Password</h2>";
}

closeCon($conn);
?>
