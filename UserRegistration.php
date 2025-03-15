<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<h2>User Registration</h2>
    <form action="/home.php" method="post">
      
        <label for="fname">First Name: </label>
        <input tyoe="text" id="fname" name="fname" placeholder="give your first name"> <br><br>
        <label for="lname">Last Name : </label>
        <input type="text" id="lname" name="lname" placeholder="give your last name"><br><br>
        <label for="email">Email :</label>
        <input type="email"id="email" name="email" placeholder="abc@gmail.com"><br><br>
       
        <label for="pass" >Password : </label>
        <input type="password" id="pass" name="pass" ><br><br>

        <label for="phn"> Phone :</label>
        <input type="tel" id="phn" name="phn" placeholder="+880"><br><br>

        <label for="uname"> User Name : </label>
        <input type="text" id="uname" name="uname"><br><br>



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
        </select> <br><br>
            
     <label>Address: <textarea name="address" rows="3" placeholder="123st,10road,Dhaka"></textarea></label> <br><br>

       <label for="dob"> Date of Birth : </label>
        <input type="date" id="dob" name="dob"><br><br>

        <label>Gender  :</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label>Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label>Female</label>
        <input type="radio" id="Others" name="gender" value="Others">
        <label>Others</label> <br><br>

     <label for="hobby"> Hobby : </label>
     <input type="checkbox" id="trv" name="hobby" value="Traveling">
     <label>TRAVELING </label>
     <input type="checkbox" id="read" name="hobby" value="Reading">
     <label>READING</label>
     <input type="checkbox" id="game" name="hobby" value="Game">
     <label>Play Games </label>
     <input type="checkbox" id="oth" name="hobby" value="others">
     <label>Others </label>

       <br><br> <input type="submit"> 

</form>
</center>
</body>
</html>