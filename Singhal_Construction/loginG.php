<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '203103879042-kdtp5bd23e0806vv1dk4o6084uuests7.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'BLmOvgib2yx-xMcviqkWDkSe'; //Application client secret
	$redirectURL = 'http://localhost/Singhal_Construction/login.php'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Your Application Name');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>