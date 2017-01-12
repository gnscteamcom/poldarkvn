<?php

class Poldark
{
	public static $series = array();

	public static function addSeries($series) {
		array_push(self::$series, $series);
	}

	public static function countSeries() {
		return count(self::$series);
	}

	public static function getSeries($seriesNumber) {
		$sizeOfSeries = sizeof(self::$series);
		if ($sizeOfSeries >= $seriesNumber) {
			return self::$series[$seriesNumber-1];
		} else {
			exit('Lỗi: Mùa này chưa có hoặc không tồn tại. Hiện hệ thống chỉ mới có '. $sizeOfSeries . ' mùa.');
		}
	}

	public static function getAllSeries() {
		return self::$series;
	}
}