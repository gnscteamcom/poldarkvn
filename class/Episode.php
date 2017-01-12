<?php

class Episode {
	private $number;

	private $translators = array();
	private $translatedPercent = 0;
	
	private $driveID;
	private $dailymotionID;
	private $openloadID;
	
	private $frontImg;
	private $desc = "Chưa có nội dung.";
	private $previewID = null;

	private $translating = false;
	private $online = false;
	private $source = "BluRay";
	private $releasedDate = '--/--/----';
	private $subReleasedDate = '--/--/----';

	
	function __construct($number)	{
		$this->number = $number;
	}

	function getEpisodeInfo() {
		return get_object_vars($this);
	}

	public function getEpisodeNumber() {
		return $this->number;
	}

	public function addTranslator($name) {
		array_push($this->translators, $name);
		return $this;
	}

	public function updateTranslationProgress($translatedLines, $totalLines) {
		$this->translating = true;
		$this->translatedPercent = floor(($translatedLines/$totalLines) * 100);
	}

	public function setDriveID($id) {
		$this->driveID = $id;
		return $this;
	}

	public function getDirectLink() {
		if (isset($this->driveID)) {
			return getDriveLinks($this->driveID);
		} else {
			return null;
		}
	}

	public function setDailymotionID($id) {
		$this->dailymotionID = $id;
		return $this;
	}

	public function getDailymotionID() {
		if (isset($this->dailymotionID)) {
			return $this->dailymotionID;
		} else {
			return null;
		}
	}

	public function setOpenloadID($id) {
		$this->openloadID = $id;
		return $this;
	}

	public function getOpenloadID() {
		if (isset($this->openloadID)) {
			return $this->openloadID;
		} else {
			return null;
		}
	}

	public function setOnline() {
		$this->online = true;
		return $this;
	}

	public function getOnlineStatus() {
		return $this->online;
	}

	public function setFrontImage($imgID) {
		$this->frontImg = $imgID;
		return $this;
	}

	public function getFrontImage() {
		return $this->frontImg;
	}

	public function setDescription($desc) {
		$this->desc = $desc;
		return $this;
	}

	public function setTVSource() {
		$this->source = "HDTV";
		return $this;
	}

	public function setReleasedDate($date) {
		$this->releasedDate = $date;
		return $this;
	}

	public function setSubReleasedDate($date) {
		$this->subReleasedDate = $date;
		return $this;
	}

	public function setPreviewID($id) {
		$this->previewID = $id;
		return $this;
	}
}