<?php
function getIP($encoded) {
	return openssl_decrypt(base64_decode($encoded), 'AES-128-CBC' , "AntiSubTheft");
}

$_GLOBAL['blacklist'] = array(
	//getIP('Tm14aU1Oanh4cElUcm55ZmNnSGNFZz09')
);