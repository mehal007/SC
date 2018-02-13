<?php
session_start();
$username=$_SESSION['first_name'];
$email=$_SESSION['email'];

$conn= new mysqli("localhost","root","","construction");
if($conn->connect_error)
{
    die("Connection failed" . $conn->connect_error);
}
$sql="SELECT * FROM user WHERE email='".$email."'";
$re =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($re);
if(!$row['email']==$email) {
    $re = "INSERT INTO user (Name,email) VALUES ('$username','$email')";
    $result = $conn->query($re);
}
header("Location: Construction.php")

?>