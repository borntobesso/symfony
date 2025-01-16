<?php
class Coffee extends HotBeverage {
	private static $description = "Coffee is a hot drink made from roasted and ground coffee beans, the seeds of berries from certain Coffea species.";
	private static $comment = "Attention, it is very addictive!";
	
	function get_description() {
		return self::$description;
	}
	function get_comment() {
		return self::$comment;
	}
}