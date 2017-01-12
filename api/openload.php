<?php
header('Content-Type: application/json');  

if (isset($_GET['series']) && isset($_GET['episode'])) {
	$series = Poldark::getSeries(intval($_GET['series']));
	$episode = $series->getEpisode(intval($_GET['episode']));

	$openloadID = $episode->getOpenloadID();
	

	if (isset($_GET['captcha']) && isset($_GET['ticket'])) {
		getDownloadLink($series, $episode, $openloadID, $_GET['ticket'], $_GET['captcha']);
	} else {
		$apiLink = 'https://api.openload.co/1/file/dlticket?login=563f2df45303c360&key=wi5agP8Z&file=' . $openloadID;
		$response = json_decode(curl($apiLink), true);
		if ($response['status'] == 200) {
			if (!$response['result']['captcha_url']) {
				getDownloadLink($series, $episode, $openloadID, $response['result']['ticket'], false);
			} else {
				output(
					array(
						'ticket' => $response['result']['ticket'],
						'captcha_url' => $response['result']['captcha_url']
					)
				);
			}
		} else {
			outputError('OpenLoad API Error: ' . $response['msg']);
		}
	}	
} else {
	outputError("Lỗi: Thiếu dữ liệu đầu vào. | Error: Input missing.");
}

function getDownloadLink($series, $episode, $id, $ticket, $captcha) {
	$dlApi = 'https://api.openload.co/1/file/dl?file=' . $id . '&ticket=' . $ticket;
	if (!$captcha) {
		$dlApi .= '&captcha_response=' . $captcha;
	}
	$response = json_decode(curl($dlApi), true);
	if ($response['status'] == 200) {
		output(
			array(
				'imgFront' => $episode->getFrontImage(),
				'series' => $series->getSeriesNumber(),
				'episode' => $episode->getEpisodeNumber(),
				'type' => $response['result']['content_type'],
				'openloadURL' => $response['result']['url'],
				'subtitles' => array(array(
					'file' => 'PoldarkVN_vi_' . sprintf("%02d", $series->getSeriesNumber()) . '_' . sprintf("%02d", $episode->getEpisodeNumber()),
					'label' => 'Tiếng Việt',
					'kind' => 'captions'
				))
			)
		);
	} else {
		outputError('OpenLoad API Error: ' . $response['msg']);
	}
}