<?php
session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '',
  'app_secret' => '',
  'default_graph_version' => 'v2.5'
]);

$helper = $fb->getJavaScriptHelper();

try {
  $accessToken = $helper->getAccessToken();
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
}

if (isset($accessToken)) {
   $fb->setDefaultAccessToken($accessToken);

  try {
  
    $requestProfile = $fb->get("/me?fields=name,email");
    $profile = $requestProfile->getGraphNode()->asArray();
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
  }

  $_SESSION['name'] = $profile['name'];
  $_SESSION['email'] = $profile['email'];
  

// Checking in which page we are
 if (strpos($_SERVER['HTTP_REFERER'], 'enMinuKuulutusedLoggedout') !== false) {
	 header('Location:http://localhost/P2P/index.php/welcome/enMinuKuulutused');
  		exit;
	}elseif(strpos($_SERVER['HTTP_REFERER'], 'minuKuulutusedLoggedOut') !== false) {
	 header('Location:http://localhost/P2P/index.php/welcome/minuKuulutused');
  		exit;
		}else{
  	header('Location:'.$_SERVER['HTTP_REFERER']);
  	exit;
	}
  
} else {
    echo "Unauthorized access!!!";
    exit;
}

?>
