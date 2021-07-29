<?php

// require files
require_once "scanner.php";
require_once "define.php";
require_once "tools.php";

class magic
{
	public static function snap()
	{
		require_once "layout/page.php";
		$tree = scanner::drawTree();
	}
}