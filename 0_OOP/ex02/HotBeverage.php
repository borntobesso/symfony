<?php
class HotBeverage
{
	public $name;
	public $price;
	public $resistance;
	function __construct($name, $price, $resistance) {
		$this->name = $name;
		$this->price = $price;
		$this->resistance = $resistance;
	}
	function get_name()
	{
		return $this->name;
	}
	function get_price()
	{
		return $this->price;
	}
	function get_resistance()
	{
		return $this->resistance;
	}
}
?>