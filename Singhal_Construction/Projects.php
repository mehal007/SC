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
    <style>
        .fp1{
            margin: 10px;
            width: 315px;
            height: 300px;
        }
        .fp1:hover .overlay{
            opacity: .90;
        }
        .overlay{
            margin-left: 14px;
            height: 300px;
            width: 315px;
            opacity: 0;
            transition: .5s ease;
            background-color: rosybrown;
            position: absolute;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;

        }
        .text{
            position: absolute;
            top: 35%;
            color: white;
            font-size: 20px;
            text-align: center;
        }
    </style>
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
            <li><a href="Construction.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="services.php">Services</a></li>
            <li class="active"><a href="#">Projects</a></li>
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

<!--main-->
<div class="row">
    <div class="col-md-4" style="padding: 30px;">
        <p style="font-size: 30px; color: Blue; font-family: Tahoma">Singhal Construction Desighs, Builds and Maintain Projects around the world</p>
    </div>
    <div class="col-md-8 " style="padding: 30px">
        <p style="font-size: 22px; color: darkgrey; font-family: Tahoma">Serving Clients in Energy & Chemicals, Power, Infrastructure, Mining & Metals, Life Sciences
            & Advanced Manufacturing and Government,Fluor delivers engineering, procurement, fabrication,
            construction, maintenance and project management services worldwide.</p>
    </div>
</div>

<!--featured projects-->
<b><p style="font-size: 30px; color: #007bff; margin-left: 20px;">Featured Projects</p></b>
<div class=" container-fluid row" style="margin-bottom: 30px;">
    <div class="col-md-3 fp1"><img src="images/fp1.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This was the project based in New York.
                It was a 23 storey building manufactured for xyz company</div></div></div>
    <div class="col-md-3 fp1"><img src="images/fp2.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This was the project based in Surat.
                It was the mining project for solar energy under Indian Govt.</div></div></div>
    <div class="col-md-3 fp1"><img src="images/fp3.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This was the project based in Dubai
                It was the multiplex project of Royal Emirates.</div></div></div>
    <div class="col-md-3 fp1"><img src="images/fp4.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This was the project based in New Delhi.
                It was the Building made for Indian Govt.</div></div></div>
</div>

<b><p style="font-size: 30px; color: #007bff; margin-left: 20px;">Present Projects</p></b>
<div class=" container-fluid row" style="margin-bottom: 30px;">
    <div class="col-md-3 fp1"><img src="images/pp4.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This is the project based in Kanpur.
                It is the personal construction</div></div></div>
    <div class="col-md-3 fp1"><img src="images/pp1.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This is the project based in Jaipur.
                It is the society construction.</div></div></div>
    <div class="col-md-3 fp1"><img src="images/pp2.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This is the project based in Jaipur.
                It is the Temple construction going on under Patanjali Trust</div></div></div>
    <div class="col-md-3 fp1"><img src="images/pp3.jpg" style=" display: block; height: 300px; width:315px;">
        <div class="overlay" style="color: white;"><div class="text">This is the project based in Agra.
                It is the Flat construction going on under Singhal Construction</div></div></div>
</div>

<a href="#"><b><p style="font-size: 30px; color: #007bff; margin-left: 20px;">Other Projects</p></b></a>
<!--F0000TTTTTEEEERRRRR-->
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