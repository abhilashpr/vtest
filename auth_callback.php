<?php
session_start();
include './mainconfig.php';
$client_id = '218317847068-cac2gfos9vecvq91ivfkbjmrvl2mjsbh.apps.googleusercontent.com';
$client_secret = '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';
$redirect_uri = 'http://localhost/onlineqz/auth_callback.php';

$token_url = 'https://accounts.google.com/o/oauth2/token';
$code = $_GET['code'];
$params = [
    'code' => $code,
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'grant_type' => 'authorization_code'
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$token_data = json_decode($response, true);

if(!empty($token_data['access_token'])) {

$_SESSION['usertocken'] =$token_data['access_token'];
$_SESSION['role'] = 'user';

header("Location: ".MAINROOT."Home.php");


	}else{
		echo "Invalid Try";
	}