<?php
	session_start();
	if(!isset($_SESSION['logincust']))
	{
		session_unset();
	}
?>
<!DOCTYPE html>
<html lang="en" class="ie9">
<head>
    <meta charset="UTF-8">
    <title>Singhal Construction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!--navbar--->
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
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
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
            <?php
                if(!isset($_SESSION['logincust'])){
                echo '<div class="nav navbar-nav navbar-right" style="margin-right: 20px">
                      <li style="font-size: 15px"><a href="login.php" ><span class="glyphicon glyphicon-user"></span> login</a></li>
                      <li style="font-size: 15px"><a href="Sign_up.php">signup</a></li>
                      </div>';
            }
            else
            {echo'<div class="nav navbar-nav navbar-right" style="margin-right: 20px">
                <li style="font-size: 20px; color: orange; margin: 12px">Welcome '.$_SESSION['first_name'].'!</li>
                <li style="font-size: 20px"><a href="Construction.php?logout=yes">Logout</a></li>
                </div>';
			if(isset($_GET['logout'])&& $_GET['logout']="yes") {
                session_unset();
                header("Location: Construction.php");
            }
            }
            ?>

    </div>
</nav>
<!--carousel--->
<div class=" mycarousel carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target=".mycarousel" data-slide-to="0" class="active"></li>
        <li data-target=".mycarousel" data-slide-to="1"></li>
        <li data-target=".mycarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="responsive" src="images/home_image.jpg" >
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>thank you for your support</p>
            </div>
        </div>
        <div class="item">
            <img class="responsive" src="images/home_image_2.jpg" >
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>thank you for your support</p>
            </div>
        </div>
        <div class="item">
            <img class="responsive" src="images/home_image_3.jpg" >
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>thank you for your support</p>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href=".mycarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href=".mycarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Previous</span>
    </a>
</div>
<!--Fooooteeerrrr-->
<div class="row container-fluid" style=" margin: 0px; background-color: #242729; padding-left: 50px" id="footer">
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