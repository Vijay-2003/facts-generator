<?php 

session_start();
$db_server = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "collegestudents";
$con = "";

try
{
    $con = mysqli_connect($db_server,$db_username,$db_pass,$db_name);
}
catch(mysqli_sql_exception)
{
    echo "<script> alert('NOT CONNECTED TO THE DATABASE!') </script>";
}
?>