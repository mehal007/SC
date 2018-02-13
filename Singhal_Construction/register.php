<?php
session_start();
if(isset($_SESSION['logincust']))
{
    header("Location: Construction.php");
}
else
{
    session_unset();
}

$email=$_POST['email'];
$password=$_POST['password'];

$conn = new mysqli("localhost","root","","construction");
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error );
}
$sql="SELECT * FROM user WHERE email='".$email."' AND password=$password";
$re =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($re);
if($row['email']==$email && $row['password']==$password)
{
    echo "login success";
    if(isset($email))
    {
        session_start();
        $_SESSION["username"] = $row['Name'];
        $_SESSION['first_name'] = $row['Name'];
        $_SESSION["password"] = $password;
        $_SESSION['logincust']='yes';
        ini_set("session.cookie_lifetime","86400");
    }
    header("Location: Construction.php");
}
else
{
    echo "fails";
}
$conn->close();
?>

