<?php
// login.php
require 'config.php'; // Includes the Google API Client autoloader

// Create Google Client object
$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);
$client->addScope('email'); // Request email scope
$client->addScope('profile'); // Request profile scope

// If we don't have an authorization code then get one
if (!isset($_GET['code'])) {
    $authUrl = $client->createAuthUrl(); // Get the authorization URL
    $_SESSION['oauth2state'] = 'some_random_secure_string'; // Manually manage state for CSRF if not handled by client
                                                          // The Google client usually handles this automatically on its own

    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit();
} else {
    // This part should be in callback.php
    header('Location: ' . GOOGLE_REDIRECT_URI . '?code=' . $_GET['code'] . (isset($_GET['state']) ? '&state=' . $_GET['state'] : ''));
    exit();
}
?>