<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require 'class/index.php';
require 'series/index.php';

function output($data) {
	echo json_encode(
		array(
			'success' => true,
			'data' => $data
		)
	);
}

function outputError($message) {
	echo json_encode(
		array(
			'success' => false,
			'message' => $message 
		)
	);
	exit();
}

if (isset($_GET['action']) && !empty($_GET['action'])) {
	require_once('api/' . $_GET['action'] . '.php');
} else {
	die('Action not found!');
}
