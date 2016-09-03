<?php
//$fb = new Facebook\Facebook([/* . . . */]);
session_start() ;
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1092779527471817',
  'app_secret' => 'abb8200e1440350ff775e0fcf59c207f',
  'default_graph_version' => 'v2.6'
]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
   // echo $_SESSION['facebook_access_token'] ;
    
    $fb->setDefaultAccessToken($accessToken);

try {
  $response = $fb->get('/me/');
  $userNode = $response->getGraphUser();
// echo $response ;    
 // echo var_dump(get_object_vars($response));
 
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

//echo 'Logged in as ' . $userNode;
var_dump(json_decode($userNode));
$_SESSION['name'] = $userNode['name'];
$_SESSION['id'] = $userNode['id'];
header("location:apii.php?action=insert_data");

// echo $userNode['name'];
// echo $userNode['id'];
     

    

  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}

?>