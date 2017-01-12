<?php

header('Content-Type: application/json');                               

if (isset($_GET['series']) && isset($_GET['episode'])) {
	$series = Poldark::getSeries(intval($_GET['series']));
	$episode = $series->getEpisode(intval($_GET['episode']));

	$i18n = false;
	if (isset($_GET['i18n']) && $_GET['i18n'] == true) {
		$i18n = true;
	}

	if (!$i18n && !$episode->getOnlineStatus()) {
		outputError('Tập ' . $episode->getEpisodeNumber() . ' của Mùa ' . $series->getSeriesNumber() . ' chưa được chiếu.');
	}

	$googleLinks = array();
	$directLinks = $episode->getDirectLink();
	if ($directLinks != null) {		
		foreach ($directLinks as $link) {
			$sourceSetup = array(
				'file' => $link['file'],
				'label' => $link['label'],
				'type' => $link['type']
			);			
			array_push($googleLinks, $sourceSetup);
		}
	}

	$subtitlePaths = array();
	$directory = "sub/s" . $series->getSeriesNumber() . "/e" . $episode->getEpisodeNumber() . "/";

	if($i18n) {
		$subFiles = glob($directory . '*.vtt');
		foreach($subFiles as $filename) {
			$lang = basename($filename, ".vtt");
			$filename = '/' . $filename;
			
			$trackSetup = array(
				'file' => $filename,
				'label' => Languages::retrieveLocale($lang),
				'kind' => 'captions'
			);
			array_push($subtitlePaths, $trackSetup);
		}
	} else {
		array_push($subtitlePaths,
			array(
				'file' => 'PoldarkVN_vi_' . sprintf("%02d", $series->getSeriesNumber()) . '_' . sprintf("%02d", $episode->getEpisodeNumber()),
				'label' => 'Tiếng Việt',
				'kind' => 'captions'
			)
		);
	}

	$data = array(
		'imgFront' => $episode->getFrontImage(),
		'series' => $series->getSeriesNumber(),
		'episode' => $episode->getEpisodeNumber(),
		'google' => $googleLinks,
		'subtitles' => $subtitlePaths
	);
	
	output($data);
} else {
	outputError("Lỗi: Thiếu dữ liệu đầu vào. | Error: Input missing.");
}