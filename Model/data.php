<?php
function createCon()
{
    $conn = mysqli_connect("localhost", "root", "", "userinfo");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function insertData($conn, $fname, $lname, $email, $pass, $phone, $uname, $gender)
{
    $sql = "INSERT INTO registration (fname,lname,email,password,phone,username,gender) VALUES ('$fname','$lname','$email','$pass','$phone','$uname','$gender')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted successfully. For login click <a href='login.php'><h2>here</h2></a>.";
    } else {
        die("Error " . mysqli_error($conn));
    }
}

function closeCon($conn)
{
    mysqli_close($conn);
}

function checkLogin($conn, $uname, $pass)
{
    $sql = "SELECT * FROM registration WHERE username='$uname' AND password='$pass'";
    return mysqli_query($conn, $sql);
}
?>
