<?php
require_once 'vendor/autoload.php'; // Load Google client library (via Composer)

$client = new Google_Client();
$client->setClientId('YOUR_CLIENT_ID');
$client->setClientSecret('YOUR_CLIENT_SECRET');
$client->setRedirectUri('https://redmoon3d.com/auth/callback.php');
$client->addScope("email");
$client->addScope("profile");

// 1. Get the code from URL
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    // 2. Set the access token
    $client->setAccessToken($token['access_token']);

    // 3. Get user profile info
    $oauth2 = new Google_Service_Oauth2($client);
    $userInfo = $oauth2->userinfo->get();

    // 4. Use user info (e.g., store in session/database)
    session_start();
    $_SESSION['email'] = $userInfo->email;
    $_SESSION['name'] = $userInfo->name;

    // Redirect to dashboard or homepage
    echo "good";
    // exit;
} else {
    echo "No code received from Google.";
}
?>
