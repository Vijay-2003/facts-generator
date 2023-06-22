<?php 
require "db.php";
if(!empty($_SESSION["id"]))
{
    header("Location:index.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $mobilen = $_POST["mobile"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["confirmpassword"];
    $duplicate = "SELECT * FROM info WHERE username = '$username' OR pass = '$pass'";
    $duplicates = mysqli_query($con, $duplicate);
    if(mysqli_num_rows($duplicates) > 0)
    {
        echo "<script> alert('Username Already Taken') </script>";
    }
    else{
        if($pass == $cpass)
        {
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $query = "INSERT INTO info(username,mobile,email,pass,confirmpassword) VALUES('$username','$mobilen','$email','$hash','$cpass')";
            mysqli_query($con, $query);
            echo "<script> alert('Registered Successfully') </script>";
        }
        else
        {
            echo "<script> alert('Password Doesn't Match') </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signups11.css">
    <title>SIGNUP</title>
</head>
<body>
    <h1><span>Facts</span> Generator</h1>
    <div id="sign">
        <h2>Sign Up</h2>
    <form method="POST">
        <table>
<tr><td><label>Username :</label></td></tr>
<tr><td><input type="text" name="username" required></td></tr>
<tr><td><label>Mobile No. :</label></td></tr>
<tr><td><input type="number" name="mobile" placeholder="+91" required></td></tr>
<tr><td><label>Email id :</label></td></tr>
<tr><td><input type="email" name="email" required></td></tr>
<tr><td><label>Password :</label></td></tr>
<tr><td><input id="pass" type="password" name="pass" required></td></tr>
<tr><td><label>Confirm Password :</label></td></tr>
<tr><td><input id="pass" type="password" name="confirmpassword" required></td></tr>
<tr><td><center><input id="btn" type="submit" name="signup" value="SUBMIT"></center></td></tr>
<tr><td>Already have an account ? <a href="index.php">LOGIN</a></td></tr>
        </table>
    </form>
    </div>
</body>
</html>