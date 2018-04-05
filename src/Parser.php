<?php

namespace vilan\parser;

class Parser {

	public $text;

	public function __construct($text = null) {
		$this->text = $text;
	}

	public function parse() {
		return 'We parse all tags';
	}

	public function showText() {
		echo $this->text . "\r\n";
	}

}