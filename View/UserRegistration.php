<?php
include "../Control/validation.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="User.css" />
    <!-- <script src="script.js"></script> -->
</head>
<body>
    <center> 
     
        <h2>User Registration </h2>
        <p>CAR</p>
   <img src="../img/back.jpg" >  
  <form name="userform"  onsubmit="return Validation()" method="post" enctype="multipart/form-data"  >
      
        <label for="fname">First Name: </label>
        <input type="text" id="fname" name="fname" placeholder="give your first name">
        <span class="error" id="fError"><?php echo $fNameError; ?></span><br><br>

        <label for="lname">Last Name : </label>
        <input type="text" id="lname" name="lname" placeholder="give your last name">
        <span class="error" id="lError"><?php echo $lNameError;  ?> </span><br><br>

        <label for="email">Email :</label>
        <input type="email"id="email" name="email" placeholder="abc@gmail.com">
        <span class="error" id="mailError"><?php echo $emailError; ?></span><br><br>
        
        <label for="pass" >Password : </label>
        <input type="password" id="pass" name="pass" >
        <span class="error" id="passError"><?php echo $passError; ?></span><br><br> 

        <label for="phn"> Phone :</label>
        <input type="tel" id="phn" name="phn" placeholder="+880">
        <span class="error" id="phoneError"><?php echo $phnError; ?> </span><br><br>

        <label for="uname"> User Name : </label>
        <input type="text" id="uname" name="uname">
        <span class="error" id="UserError"><?php echo $unameError; ?></span><br><br>



        <label for="Division"> Division : </label>
        <select name="division" id="division">
            <option value="Dhaka">DHAKA </option>
            <option value="Chittagong">CHITTAGONG </option>
            <option value="Barishal">BARISAL </option>
            <option value="Khulna">KHULNA </option>
            <option value="Rajshahi">RAJSHAHI </option>
            <option value="Rangpur">RANGPUR </option>
            <option value="Sylhet">SYLHET </option>
            <option value="Mymensingh">MYMENSINGH </option>
        </select><span class="error" id="DivError"></span><br><br>
            
     <label>Address: <textarea name="address" rows="3" placeholder="123st,10road,Dhaka"></textarea></label>
     <span class="error" id="AdError"></span><br><br>

       <label for="dob"> Date of Birth : </label> 
        <input type="date" id="dob" name="dob">
        <span class="error" id="DobError"></span><br><br>

        <label>Gender  :</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label class="gender" >Male</label>
        <input type="radio" id="female"  name="gender" value="Female">
        <label class="gender" >Female</label>
        <input type="radio" id="Others" name="gender" value="Others">
        <label class="gender" >Others</label>
        <span class="error" id="genderError"><?php echo $genderError; ?></span> <br><br>

     <label for="hobby"> Hobby : </label>
     <input type="checkbox" id="trv" name="hobby" value="Traveling">
     <label>TRAVELING </label>
     <input type="checkbox" id="read" name="hobby" value="Reading">
     <label>READING</label>
     <input type="checkbox" id="game" name="hobby" value="Game">
     <label>Play Games </label>
     <input type="checkbox" id="oth" name="hobby" value="others">
     <label>Others </label>
     <span class="error" id="HobbyError"></span><br><br>
     <input type="file" name="files">
       <br><br> 

       <input type="submit" class="btn submit" value="Submit"> 
       <input type="reset" class="btn reset" value="Reset">

</form>
</center>
</body>
</html>