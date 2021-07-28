<?php

// require files
require_once "scanner.php";
require_once "define.php";

class magic
{
	public static function snap()
	{
		$tree = scanner::drawTree();
		var_dump($tree);
	}
}