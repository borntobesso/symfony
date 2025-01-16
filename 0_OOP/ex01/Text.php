<?php
class Text
{
	private $strings;

	function __construct($strings)
	{
		$this->strings = $strings;
	}

	function append($newString)
	{
		$this->strings[] = $newString;
	}

	function readData()
	{
		$html = "";
		foreach ($this->strings as $string) {
			$html .= "<p>$string</p>";
		}
		return $html;
	}
}
