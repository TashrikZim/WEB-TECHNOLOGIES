<?php
include "../Model/data.php";
$uname=$_GET['uname'];
$conn=createCon();

$sql="SELECT *FROM  registration WHERE username='$uname'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);

    echo "<h2>Welcome ".$row['username']."</h2>";
    echo "<p>Email :". $row['email']."</p>";
    echo "<p>Phone :".$row['phone']."</p>";
    echo "<p>Address : ".$row['address']."</p>";
    echo "<p>First Name: " . $row['fname'] . "</p>";
    echo "<p>Last Name: " . $row['lname'] . "</p>";
}
else{
    echo "User Not Found";
}
closeCon($conn);

?>