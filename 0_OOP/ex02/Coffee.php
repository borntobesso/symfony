<?php
include "HotBeverage.php";
class Coffee extends HotBeverage {
	private $description;
	private $comment;
	
	function get_description() {
		return $this->description;
	}
	function get_comment() {
		return $this->comment;
	}
}