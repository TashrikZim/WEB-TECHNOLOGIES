
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
        <h2>Login</h2>
        <form method="POST" action="../Control/login_control.php">
            Username: <input type="text" name="uname" required ><br><br>
            Password: <input type="password" name="passw" required ><br><br>
            <input type="submit" value="Login">
        </form>
    </center>
</body>
</html>



<!-- 
      if(empty($_REQUEST["uname"])){
        $loginUname="Enter User Name";

      }
      if(empty($_REQUEST["passw"]))
      {
        $loginPass="Enter Password";
      } -->