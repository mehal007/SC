<?php

if(isset($_SESSION['logincust']))
{
    header("Location: Construction.php");
}
else
{
    session_unset();
}

$username=$_POST['username'];
$password=$_POST['password'];
$pass=$_POST['pass'];
$email=$_POST['email'];


$conn= new mysqli("localhost","root","","construction");
if($conn->connect_error)
{
    die("Connection failed" . $conn->connect_error);
}
$sql="SELECT * FROM user WHERE email='".$email."'";
$re =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($re);
if(!$row['email']==$email) {
    $re = "INSERT INTO user (Name,password,email) VALUES ('$username','$password','$email')";
    $result = $conn->query($re);
}

session_start();
$_SESSION["username"] = $username;
$_SESSION['first_name']=$username;
$_SESSION["password"] = $password;
$_SESSION['logincust']='yes';
ini_set("session.cookie_lifetime","86400");
header("Location: Sign_up.php");

?>