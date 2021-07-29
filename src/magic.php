<?php

// require files
require_once "scanner.php";
require_once "define.php";
require_once "tools.php";
require_once "template.php";

class magic
{
	public static function snap()
	{
		// draw html
		template::draw();
	}
}