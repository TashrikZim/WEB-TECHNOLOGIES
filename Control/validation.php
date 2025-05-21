<?php
include "../Model/data.php"; 
?>
<html >
<head>

    <title>Document</title>
</head>
<body>
    <center>
    <!-- <h2> You have successfully signed up. </h2>
    <p>Click <a href=UserRegistration.php>Here</a> to return home </p> -->
    <?php 
    $fNameError="";
    $lNameError="";
    $emailError="";
    $passError="";
    $phnError="";
    $genderError="";
    $unameError="";
    $loginUname="";
    $loginPass="";
    $errorTrace=0;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_REQUEST["fname"]))
     {
        $fNameError="Invalid First Name";
        $errorTrace=1;
       
     }
    //  else{
    //     echo $_REQUEST["fname"]."<br>";
    //  }

     if(empty($_REQUEST["lname"]))
     {
        $lNameError="Invalid Last Name";
        $errorTrace=1;
     }
    //  else{
    //     echo $_REQUEST["lname"]."<br>";
    //  }

     if (empty($_REQUEST["email"])) {
        $emailError = "Email is required";
        $errorTrace=1;
    } else if (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid Email Format";
        $errorTrace=1;
    }
    //  else {
    //     echo $_REQUEST["email"]."<br>";
    // }
    

    if (empty($_REQUEST["pass"])) {
    $passError = "Password is required";
    $errorTrace=1;
      } else if (strlen($_REQUEST["pass"]) < 6) {
       $passError = "Password must be at least 6 characters long";
       $errorTrace=1;
      }

      if(empty($_REQUEST["phn"])){
        $phnError="Phone number is required";
        $errorTrace=1;
      }
      else if(strlen($_REQUEST["phn"]) != 11)
      {
        $phnError="Phone number must be exactly 11 digits";
        $errorTrace=1;
      }
      if(empty($_REQUEST["uname"])){
        $unameError="User Name is required";
        $errorTrace=1;
      }
      // else{
      //   echo $_REQUEST["uname"]."<br>";
      // }

      if (!isset($_REQUEST["gender"])) {
          $genderError = "Gender is required";
          $errorTrace=1;
      } else {
          $gender = $_REQUEST["gender"];
      }
      if($_FILES["files"]["name"]=="")
      {
        echo "No files Uploaded"; 
      }
      else{
        if(move_uploaded_file($_FILES["files"]["name"],"../uploads/".$_FILES["files"]["name"]));
        {
          echo "file uploaded"."<br>";
        } 
      }

          if($errorTrace==0)
    {
        $conn=createCon();
        insertData($conn,$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["email"],$_REQUEST["pass"],$_REQUEST["phn"],$_REQUEST["uname"],$_REQUEST["gender"]);
        closeCon($conn);
    }
    }


    ?>
</center>
</body>
</html>