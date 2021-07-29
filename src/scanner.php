<?php
class scanner
{
	public static function drawTree()
	{
		$tree = [];
		$folders = self::get_list_of_folders();

		foreach ($folders as $dir)
		{
			$myPath = realpath($dir);
			$myDir = basename($myPath);
			$myId = md5($myPath);
			$myIcon = '';

			$newItem =
			[
				'id' => $myId,
				'text' => $myDir,
				'icon' => $myIcon,
				'path' => $myPath,
				'type' => 'folder',
				'children' => [],
				'files' => self::get_list_of_files($dir),
				'folders' => self::get_list_of_folders($dir),
			];

			// add new item
			$tree[] = $newItem;
		}

		// var_dump(json_encode($tree, JSON_PRETTY_PRINT));
		// exit();

		return $tree;
	}


	public static function get_list_of_folders($_addr = null)
	{
		if($_addr === null)
		{
			$_addr = PASSWD_SECRET;
		}
		$directories = glob($_addr . '/*' , GLOB_ONLYDIR);

		return $directories;
	}


	public static function get_list_of_files($_addr = null, $_ext = 'conf')
	{
		if($_addr === null)
		{
			$_addr = PASSWD_SECRET;
		}
		$searchPath = $_addr. DIRECTORY_SEPARATOR. '*'.'.'. $_ext;

		$files = glob($searchPath);

		return $files;
	}
}