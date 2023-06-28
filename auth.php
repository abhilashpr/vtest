<?php
session_start();

// Set the client ID and redirect URI
$client_id = '218317847068-cac2gfos9vecvq91ivfkbjmrvl2mjsbh.apps.googleusercontent.com';
$redirect_uri = 'http://localhost/onlineqz/auth_callback.php';

// Generate a unique state token to protect against cross-site request forgery (CSRF) attacks
$state = bin2hex(random_bytes(16));
$_SESSION['state'] = $state;

// Build the authorization URL
$auth_url = 'https://accounts.google.com/o/oauth2/auth' .
    '?response_type=code' .
    '&client_id=' . urlencode($client_id) .
    '&redirect_uri=' . urlencode($redirect_uri) .
    '&scope=openid%20email' .
    '&state=' . urlencode($state);

// Redirect the user to the authorization URL
header('Location: ' . $auth_url);
exit;
?>
