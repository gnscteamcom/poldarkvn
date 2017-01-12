<?php

header('Content-Type: text/html');     

if (isset($_GET['series'])) {
	$selectedSeries = intval($_GET['series']);
	if (isset($_GET['i18n']) && $_GET['i18n'] == true) {
		$fromAPI = true;
		require_once 'watch/templates/episode-list.php';
	} else {
		require_once 'templates/episode-list.php';
	}
} else {
	die("'series' parameter is required. Action failed.");
}