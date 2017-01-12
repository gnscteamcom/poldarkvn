<?php

class Languages {
	private static $locales = array();

	public static function addLocale($locale, $name) {
		self::$locales[$locale] = $name;
	}

	public static function retrieveLocale($locale) {
		return self::$locales[$locale];
	}
}


// List of available languages
Languages::addLocale('vi', 'Tiếng Việt');
Languages::addLocale('en', 'English');
Languages::addLocale('it', 'Italiano');
Languages::addLocale('es', 'Español');
Languages::addLocale('fr', 'Français');
Languages::addLocale('de', 'Deutsch');
Languages::addLocale('fi', 'Suomeksi');