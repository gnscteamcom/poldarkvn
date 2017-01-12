<?php

class Translator {
	private $name;
	private $uniqueID;

	function __construct($name)	{
		$this->name = $name;
		$this->uniqueID = hash("crc32b", $name);
	}

	function getName() {
		return $this->name;
	}

	function getUniqueID() {
		return $this->uniqueID;
	}
}

class Translators {
	private static $translators = array();

	public static function add($translator) {
		array_push(self::$translators, $translator);
	}

	public static function searchTranslatorById($id) {
	    foreach (self::$translators as $translator) {
	    	if ($translator->getUniqueID() == $id) {
	    		return $translator;
	    	}
	    }
		return null;
	}
}




// LIST OF TRANSLATORS
Translators::add(new Translator('anmap'));
Translators::add(new Translator('Helena Vo'));