<?php

class Series
{
	private $number;
	private $yearOfProduction;
	private $numberOfEpisodes;
	private $episodes = array();

	function __construct($number, $yearOfProduction, $numberOfEpisodes)	{
		$this->number = $number;
		$this->yearOfProduction = $yearOfProduction;
		$this->numberOfEpisodes = $numberOfEpisodes;
	}

	function getSeriesInfo() {
		return get_object_vars($this);
	}

	public function getSeriesNumber() {
		return $this->number;
	}
	
	public function getEpisode($ep) {
		$sizeOfEpisodes = sizeof($this->episodes);	
		if ($sizeOfEpisodes  >= $ep) {
			return $this->episodes[$ep - 1];
		} else {
			exit('Lỗi: Tập này chưa có hoặc không tồn tại. Hiện Mùa ' . $this->number . ' chỉ có '. $sizeOfEpisodes . ' tập trong hệ thống.');
		}
	}

	public function getAllEpisodes() {
		return $this->episodes;
	}

	public function addEpisode($episode) {
		array_push($this->episodes, $episode);
	}

	public function getNumberOfOnlineEpisodes() {
		$count = 0;
		foreach ($this->episodes as $episode) {
			$count += $episode->getOnlineStatus() ? 1 : 0;
		}
		return $count;
	}

	public function getOnlineEpisodes() {
		$onlineEpisodes = array();
		foreach ($this->episodes as $episode) {
			if ($episode->getOnlineStatus()) {
				array_push($onlineEpisodes, $episode);
			}
		}
		return $onlineEpisodes;
	}

	public function getUpcomingEpisode($numberOfOnlineEpisodes) {
		$upcomingEpisode = $numberOfOnlineEpisodes < $this->numberOfEpisodes ? $this->episodes[$numberOfOnlineEpisodes] : null;
		return $upcomingEpisode;
	}
}