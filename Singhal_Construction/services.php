<?php
session_start();
if(!isset($_SESSION['logincust']))
{
    session_unset();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            background: InfoBackground;

            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 1400px 800px;
        }
        .bg1{
            padding: 9px;
            width: 415px;
            height: 200px;
        }
        .bg1 .overlay:hover {
            opacity: 0.20;
        }
        .overlay{
            margin-top: 10px;
            height: 200px;
            width: 400px;
            opacity: .75;
            transition: .5s ease;
            background-color: rosybrown;
            position: absolute;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 20px;
        }
        .text{
            position: absolute;
            margin-left: 10px;
            top: 35%;
            color: white;
            font-size: 35px;
            text-align: center;
        }
    </style>
</head>
<body>

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
            <li class="active"><a href="#">Services</a></li>
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

<nav class="navbar navbar-inverse navbar-static-top" >
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".second">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse second">
        <ul class="nav navbar-nav">
            <li style="font-size: 20px"><a href="#b1">Engineering & services</a></li>
            <li style="font-size: 20px"><a href="#b2">Procurement</a></li>
            <li style="font-size: 20px"><a href="#b3">Construction</a></li>
            <li style="font-size: 20px"><a href="#b4">Fabrication</a></li>
            <li style="font-size: 20px"><a href="#b5">Diversified Services</a></li>
        </ul>
    </div>

</nav>

<!--middle-->
<div class="middle">
<!--Engineering & Services-->
<div class="row container" style=" width:100%; margin: 20px;">
    <div class="col-md-4 bg1" id="b1" style="height:200px; border-radius: 20px; ">
        <img src="images/bg1.jpg" style=" display: block; height: 200px; border-radius: 20px; width:400px;">
        <div class="overlay" style="color: white;"><div class="text">Engineering & Services</div></div>
    </div>
    <div class="col-md-8" style="padding-left: 30px; padding-top: 20px;">
        <p style="font-size: 25px; color: #888">With offices in 100 countries and 24/7 engineering capabilities, SC can meet Clients' project needs anywhere.
            Engineering disciplines include: civil, electrical, mechanical, piping and structural engineering;
            as well as advanced specialties such as simulation, enterprise integration, integrated automation processes and interactive 3D and 4D modeling.</p>
    </div>
</div>

<!--Procurement-->
<div class="row container" style=" width:100%; margin: 20px;">
    <div class="col-md-4 bg1" id="b2" style="height:200px; border-radius: 20px; ">
        <img src="images/bg2.jpg" style=" display: block; height: 200px; border-radius: 20px; width:400px;">
        <div class="overlay" style="color: white;"><div class="text" style="margin-left: 80px">Procurement</div></div>
    </div>
    <div class="col-md-8" style=" padding-left: 30px;">
        <p style="font-size: 25px; color: #888">SC leverages international procurement expertise,
            market knowledge and global supply chain networks to provide the best value for Clients' capital investments.
            Our procurement organization manages an annual global spend of more than $16 billion in equipment,
            materials and services through strategic sourcing, material management, contract management and logistics functions.
        </p>
    </div>
</div>

<!--Construction-->
<div class="row container" style=" width:100%; margin: 20px;">
    <div class="col-md-4 bg1" id="b3" style="height:200px; border-radius: 20px; ">
        <img src="images/bg3.jpg" style=" display: block; height: 200px; border-radius: 20px; width:400px;">
        <div class="overlay" style="color: white;"><div class="text" style="margin-left: 80px">Construction</div></div>
    </div>
    <div class="col-md-8" style=" padding-left: 30px;  padding-top: 20px;">
        <p style="font-size: 25px; color: #888">A global execution platform gives Clients the confidence SC can deliver complex,
            logistically challenging projects anywhere in the world. With a workforce of more than 60,000 employees deployed on projects
            in over 100 countries and 24/7 project-execution capabilities, we deliver projects with the quality and safety our Clients expect.
        </p>
    </div>
</div>

<!--Fabrication-->
<div class="row container" style=" width:100%; margin: 20px;">
    <div class="col-md-4 bg1" id="b4" style="height:200px; border-radius: 20px; ">
        <img src="images/bg4.jpg" style=" display: block; height: 200px; border-radius: 20px; width:400px;">
        <div class="overlay" style="color: white;"><div class="text" style="margin-left: 90px">Fabrication</div></div>
    </div>
    <div class="col-md-8" style=" padding-left: 30px; padding-top: 20px;">
        <p style="font-size: 25px; color: #888">SC's technical experts constantly look for ways to streamline project delivery methods.
            Fabrication is proven way we can we can improve capital efficiencies for our Clients, across all industries.<br>
            We offer a flexible approach to fabrication solutions, with a range of fabrication options to fit our Clients' specific needs.
        </p>
    </div>
</div>

<!--Diversified Services-->
<div class="row container" style="  width:100%; margin: 20px;">
    <div class="col-md-4 bg1" id="b5" style="height:200px; border-radius: 20px; ">
        <img src="images/bg5.jpg" style=" display: block; height: 200px; border-radius: 20px; width:400px;">
        <div class="overlay" style="color: white;"><div class="text" style="margin-left: 30px">Diversified Services</div></div>
    </div>
    <div class="col-md-8" style=" padding-left: 30px;  padding-top: 20px;">
        <p style="font-size: 25px; color: #888">Operating in more than 100 countries, SC and Stork help Clients to improve performance and extend their asset life,
            focusing on minimizing downtime, enhancing cost-effective production and maximizing return on investment, while working to the highest HSE standards.
        </p>
    </div>
</div>
</div>

<!--foooooteerrrr-->
<div class="row container-fluid" style=" margin: 0px; background-color: #242729; padding-left: 50px;" id="footer">
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