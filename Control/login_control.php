<?php
include "../Model/data.php";
$uname_error="";
$pass_error="";
$uname = $_POST["uname"];
$pass = $_POST["passw"];
    // if (empty($uname)) {
    //     $uname_error = "Username is required";
    // }

    // if (empty($pass)) {
    //     $pass_error = "Password is required";
    // }
$conn = createCon();
$result = checkLogin($conn, $uname, $pass);

if (mysqli_num_rows($result) > 0) {
    // You can redirect to dashboard or user home page here
     header("Location: ../View/dashboard.php?uname=" . $uname);

} else {
    echo "<h2>Invalid Username or Password</h2>";
}

closeCon($conn);
?>
