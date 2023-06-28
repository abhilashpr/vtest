<?php 
session_start();
$access_token = $_SESSION['usertocken'];

// Set the endpoint URL to verify the token
$verify_url = 'https://www.googleapis.com/oauth2/v3/tokeninfo';

// Create a GET request to the verification endpoint
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $verify_url . '?access_token=' . urlencode($access_token));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Process the response
$response_data = json_decode($response, true);

// Check if the response contains a valid token
if (isset($response_data['aud']) && $response_data['aud'] == '218317847068-cac2gfos9vecvq91ivfkbjmrvl2mjsbh.apps.googleusercontent.com') {
  
} else {
    // The token is invalid
    echo 'Token is invalid';exit();
}



?>