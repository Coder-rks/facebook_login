<?php
session_start() ;
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
//define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
//require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1092779527471817',
  'app_secret' => 'abb8200e1440350ff775e0fcf59c207f',
  'default_graph_version' => 'v2.6'
]);

//# login.php
//$fb = new Facebook\Facebook([/* . . . */]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/var/html/login-callback.php', $permissions);
//
echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
//
//# login-callback.php
////s$fb = new Facebook\Facebook([/* . . . */]);
//
//$helper = $fb->getRedirectLoginHelper();
//try {
//  $accessToken = $helper->getAccessToken();
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//  // When Graph returns an error
//  echo 'Graph returned an error: ' . $e->getMessage();
//  exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//  // When validation fails or other local issues
//  echo 'Facebook SDK returned an error: ' . $e->getMessage();
//  exit;
//}
//
//if (isset($accessToken)) {
//  // Logged in!
//  $_SESSION['facebook_access_token'] = (string) $accessToken;
//
//  // Now you can redirect to another page and use the
//  // access token from $_SESSION['facebook_access_token']
//}
//
//
//# example-canvas-app.php
//$fb = new Facebook\Facebook([/* . . . */]);
//
//$helper = $fb->getCanvasHelper();
//try {
//  $accessToken = $helper->getAccessToken();
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//  // When Graph returns an error
//  echo 'Graph returned an error: ' . $e->getMessage();
//  exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//  // When validation fails or other local issues
//  echo 'Facebook SDK returned an error: ' . $e->getMessage();
//  exit;
//}
//
//if (isset($accessToken)) {
//  // Logged in.
//}
//
//
//# example-obtain-from-js-cookie-app.php
//$fb = new Facebook\Facebook([/* . . . */]);
//
//$helper = $fb->getJavaScriptHelper();
//try {
//  $accessToken = $helper->getAccessToken();
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//  // When Graph returns an error
//  echo 'Graph returned an error: ' . $e->getMessage();
//  exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//  // When validation fails or other local issues
//  echo 'Facebook SDK returned an error: ' . $e->getMessage();
//  exit;
//}
//
//if (isset($accessToken)) {
//  // Logged in
//}
//
//
//
//// OAuth 2.0 client handler
//$oAuth2Client = $fb->getOAuth2Client();
//
//// Exchanges a short-lived access token for a long-lived one
//$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken('{access-token}');
//
//
//
//
//$fb = new Facebook\Facebook([/* . . . */]);

// Sets the default fallback access token so we don't have to pass it to each request
//$fb->setDefaultAccessToken('{access-token}');
//
//try {
//  $response = $fb->get('/me');
//  $userNode = $response->getGraphUser();
//} catch(Facebook\Exceptions\FacebookResponseException $e) {
//  // When Graph returns an error
//  echo 'Graph returned an error: ' . $e->getMessage();
//  exit;
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//  // When validation fails or other local issues
//  echo 'Facebook SDK returned an error: ' . $e->getMessage();
//  exit;
//}
//
//echo 'Logged in as ' . $userNode->getName();


//try {
//  $response = $fb->get('/me');
//} catch(Facebook\Exceptions\FacebookSDKException $e) {
//  // . . .
//  exit;
//}
//
//$plainOldArray = $response->getDecodedBody();

?>