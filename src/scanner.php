<?php
class scanner
{
	public static function drawTree()
	{
		return self::drawFolderItems(PASSWD_SECRET);
	}


	public static function drawFolderItems($_path)
	{
		$myItems = [];
		$folders = self::get_list_of_folders($_path);

		foreach ($folders as $dir)
		{
			$myPath = realpath($dir);
			$myDir = basename($myPath);
			$myId = md5($myPath);
			$myIcon = 'folder';
			$myUrl = "?explorer=". $myId;

			$newItem =
			[
				'id' => $myId,
				'text' => $myDir,
				// 'icon' => $myIcon,
				'path' => $myPath,
				'url' => $myUrl,
				'type' => 'folder',
				'children' => self::drawFolderItems($myPath),
				'a_attr' =>
				[
					"href" =>  $myUrl,
				],
			];

			// add new item
			$myItems[] = $newItem;
		}

		$files = self::get_list_of_files($_path);

		foreach ($files as $dir)
		{
			$myPath = realpath($dir);
			$myDir = basename($myPath);
			$myId = md5($myPath);
			$myIcon = 'jstree-file';
			$myUrl = "?explorer=". $myId;

			$newItem =
			[
				'id' => $myId,
				'text' => $myDir,
				'icon' => $myIcon,
				'path' => $myPath,
				'url' => $myUrl,
				'type' => 'file',
				// 'children' => null,
				'a_attr' =>
				[
					"href" =>  $myUrl,
				],
			];

			// add new item
			$myItems[] = $newItem;
		}

		// var_dump(json_encode($myItems, JSON_PRETTY_PRINT));
		// exit();

		return $myItems;
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