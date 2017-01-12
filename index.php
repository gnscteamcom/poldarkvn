<?php

require 'blacklist/blacklist.php';

// Check for blacklist IP addresses

$accessDenied = false;
$cookie_name = '__pdast';
$cookie_value = openssl_encrypt('Bon an cap phu de', 'AES-128-CBC' , "AntiSubTheft");

if (isset($_COOKIE[$cookie_name])) {
	$accessDenied = true;
} else {

	$ipToCheck = $_SERVER['REMOTE_ADDR'] == $_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_X_FORWARDED_FOR'];
	if (in_array($ipToCheck, $_GLOBAL['blacklist'])) {
		$accessDenied = true;
		setcookie($cookie_name, $cookie_value, strtotime("+10 year"), "/");
	}
}

if ($accessDenied) {
	die('Error: Service Unavailable. Sorry for the inconvenience.');
}

require 'class/index.php';
require 'series/index.php';

require 'templates/homepage.php';
require 'templates/footer.php' ?>

