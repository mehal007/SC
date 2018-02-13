<?php
session_start();
if(isset($_SESSION['logincust']))
{
    header('Location: googleveri.php');
}
else
{
    session_unset();
}
?>
<!DOCTYPE html>
<html lang="en" class="ie9">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            background-image: url("images/bg.jpg");
            background-attachment: fixed;
            background-size: 1400px 800px;
        }
        .ig1{
            background-image: url("images/bg.jpg");
            opacity: 0.75;
            filter: alpha(opacity=75);
        }
    </style>
</head>
<body >

<!--navbar-->

<nav class="navbar navbar-inverse navbar-static-top" style="font-size: 20px; margin:0px">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mynavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="margin-left: 10px; font-size: 25px; font-family: Tahoma; color: yellowgreen">Singhal Constructions</a>
    </div>
    <div class="collapse navbar-collapse mynavbar" >
        <ul class="nav navbar-nav">
            <li><a href="Construction.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="Projects.php">Projects</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Social<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </li>
            <li><a href="#footer" >Contact us</a></li>
        </ul>
        <div class="nav navbar-nav navbar-right" style="margin-right: 20px">
            <li class="active"><a href="#" style="font-size: 15px"><span class="glyphicon glyphicon-user"></span> login</a></li>
            <li style="font-size: 15px"><a href="Sign_up.php">signup</a></li>
        </div>
    </div>
</nav>

<!--main login box-->

<div class="container">
<form method="post" action="register.php"  class="container ig1"  style="width: 600px; height: 550px; background-color: #28a745; border-radius: 15px; margin-top: 25px; padding:0;">
    <div class="container-fluid" style="background-color: green; border-radius: 15px; margin-bottom:20px">
    <h1 style="font-size: 50px; text-align: center">Login</h1></div>
    <label style="margin-left: 50px;"><b style="font-size: 20px">Email</b></label>
    <center><input type="email"  name="email" placeholder="Email" required style="width: 500px; height: 40px; font-size: 20px; border-radius: 10px; padding: 8px" ><br></center>
    <label style="margin-left: 50px; margin-top: 15px"><b style="font-size: 20px">Password</b></label><br>
    <center><input type="password"  name="password" placeholder="password" required style="width: 500px; height: 40px; font-size: 20px; border-radius: 10px; padding: 8px"><br></center><br>
    <center><button type="submit" style="width: 200px; height: 40px; font-size: 18px; border-radius: 10px;">Login</button><br><br></center>
    <div class="container-fluid" style="text-align: right; margin-right: 40px"><a href="#" style="color: white;">Forgot password?</a></div><br>
    <center>
        <p>Or log in with</p>
        <div class="row">
            <div class="col-md-6">
                <?php
                include_once 'loginG.php';
                if(isset($_GET['code'])){
                    $gClient->authenticate($_GET['code']);
                    $_SESSION['token'] = $gClient->getAccessToken();
                    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
                }
                if (isset($_SESSION['token'])) {
                    $gClient->setAccessToken($_SESSION['token']);
                }
                if ($gClient->getAccessToken())
                {
                    $gpUserProfile = $google_oauthV2->userinfo->get();
                    $_SESSION['oauth_provider'] = 'Google';
                    $_SESSION['oauth_uid'] = $gpUserProfile['id'];
                    $_SESSION['first_name'] = $gpUserProfile['given_name'];
                    $_SESSION['last_name'] = $gpUserProfile['family_name'];
                    $_SESSION['email'] = $gpUserProfile['email'];
                    $_SESSION['logincust']='yes';
                } else {
                    $authUrl = $gClient->createAuthUrl();
                    $output= '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" >
                    <button type="button" class="btn"  style="width: 200px; height: 50px; margin-left: 10px; margin-bottom: 20px; border-radius: 5px">Google</button></a>';
                }
                echo $output;
                ?>
            </div>
            <div class="col-md-6">
            <a href="#"><button type="button" class="btn"  style="width: 200px; height: 50px; margin-left: 10px; margin-bottom: 20px; border-radius: 5px">Facebook</button></a>
            </div>
        </div>
        <p>Not a member? <a href="Sign_up.php"> Sign up now</a> </p>
    </center>
</form>
</div>

<!--Foootteerrr-->
<div class="row container-fluid" style=" margin-top: 20px; background-color: #242729; padding-left: 50px" id="footer">
    <!--About-->
    <div class="container" style="align-content: center; margin-bottom: 50px">
        <h2 style="color: orange; text-align:center">About</h2>
        <p style="color: snow; font-size: 20px; text-align:center">
            Singhal Construction is meant for bringing the dreams to reality.
            Each and every project by us is well finished and is in a decent location.
            Singhal Construction consist of professionals giving shape to dreams.
        </p><br>
    </div>
    <!--Contact info-->
    <div class="col-sm-6 container" style=" margin-right: 0px">
        <h2 style="text-align: center; color: orange">Contact Info.</h2>
        <div class="row">
            <div class="col-sm-3" ><p style="font-size: 20px; font: bold; color: sandybrown">Address:-</p></div>
            <div class="col-sm-9" style="margin-top: 5px"><p style="font-size: 20px; color: snow">109,new adarsh nagar,balkeshwar,agra</p></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><p style="font-size: 20px; color: sandybrown; font: bold">Email:-</p></div>
            <div class="col-sm-9" style="margin-top: 5px"><p style="font-size: 20px; color: snow">singhalmehal9@gmail.com</p></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><p style="font-size: 20px; color: sandybrown; font: bold">Phone:-</p></div>
            <div class="col-sm-9" style="margin-top: 5px"><p style="font-size: 20px; color: snow">8475924471</p></div>
        </div>
    </div>
    <!--Location-->
    <div class="col-sm-6 container">
        <h2 style="text-align: center; color: orange">Location</h2>
        <center><div id="map" style=" width: 350px; height: 200px; background-color: grey;"></div></center>
        <script>
            function initMap() {
                var uluru = {lat: 27.2178015, lng: 78.0275399};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDboGu8_PW7NxzAKyeE3hB6u8u_jme0nLo&callback=initMap">
        </script>
    </div>
    <!--Copyright-->
    <div class="container" style="text-align: center">
        <h2 style="color: orange; text-align: center">Copyright</h2>
        <p>!<br>!<br>!<br>!</p>
    </div>
</div>

</body>
</html>