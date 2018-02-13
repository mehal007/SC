<?php


//step1
require_once ('google-login/vendor/autoload.php');

$client_id="203103879042-kdtp5bd23e0806vv1dk4o6084uuests7.apps.googleusercontent.com";
$client_Secret="BLmOvgib2yx-xMcviqkWDkSe";
$Redirect_uri="http://localhost/final/google_signin.php";


//step2

$client=new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_Secret);
$client->setRedirectUri($Redirect_uri);
//$client->setScopes("email");

//$service=new Google_Service_Oauth2($client);
//

$auth=$client->createAuthUrl();
echo "<a href='$auth'>google</a>";

//$payload=$client->verifyIdToken();
//echo $payload["email"];
?>