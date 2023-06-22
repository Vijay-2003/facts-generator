<?php
require "db.php";
if(!empty($_SESSION["id"]))
{
    header("Location:index1.php");
}
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $result = mysqli_query($con,"SELECT * FROM info where username = '$username' OR email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0)
    {
        if(password_verify($pass, $row["pass"])) //$pass == $row["pass"]
        {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:index1.php");
        }
        else
        {
            echo "<script> alert('Wrong Password') </script>";
        }
    }
    else
    {
        echo "<script> alert('User Not Registered') </script>";
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="signups11.css">
</head>
<body>
<h1><span>Facts</span> Generator</h1>
    <div id="sign">
        <h2>Login</h2>
<form method="POST">
        <table>
<tr><td><label>Username :</label></td></tr>
<tr><td><input type="text" name="username" required></td></tr>
<tr><td><label>Email id :</label></td></tr>
<tr><td><input type="email" name="email" required></td></tr>
<tr><td><label>Password :</label></td></tr>
<tr><td><input id="pass" type="password" name="pass" required></td></tr>
<tr><td><center><input id="btn" type="submit" name="login" value="LOGIN"></center></td></tr>        
<tr><td>Don't Have an account ? <a href="signup.php">Signup</a></td></tr>         
        </table>
</form>
    </div>
</body>
</html>