
<?php
session_start(); 
include "../Model/data.php";

if (isset($_SESSION['uname'])) {
    $uname = $_SESSION['uname']; 
} else {
    echo "Unauthorized access.";
    exit();
}
$conn = createCon();
$sql = "SELECT * FROM registration WHERE username='$uname'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard_style.css">
    <img src="../img/bb.avif" > 
</head>
<body>
    
<div class="container">
<?php
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "<h2>Welcome : " . $row['username'] . "</h2>";
    echo "<p>First Name: " . $row['fname'] . "</p>";
    echo "<p>Last Name: " . $row['lname'] . "</p>";
    echo "<p>Email : " . $row['email'] . "</p>";
    echo "<p>Phone : " . $row['phone'] . "</p>";



    echo "<h2>Session Data: " . $_SESSION['uname'] . "</h2>";
    echo "<h2>Cookie Data: " . $_COOKIE['username'] . "</h2>";

    
echo '<h3>Press <a href="../Control/logout.php" style="color: red; text-decoration: none;">here</a> for logout</h3>';


} else {
    echo "User Not Found";
}

closeCon($conn);
?>
</div>
</body>
</html>
