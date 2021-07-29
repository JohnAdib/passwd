<?php


class template
{
	public static function draw()
	{
		$SITE_TITLE = 'Passwd';
		$SITE_DESC = 'Password Manager for Developers based on YAML and Git';

		// variables
		$myPage = 'homepage';
		$myPageTitle = '';
		$myPageDesc = '';
		$myPageTree = null;

		if($_GET)
		{
			if(isset($_GET["explorer"]))
			{
				$myPage = 'explorer';
				// define folder and files array
				$myExplorerTree = scanner::drawTree();
				$myExplorerItems = [];
				$myPageTree = true;
			}
			else if(isset($_GET["id"]))
			{
				// if(isset($MOVIES[$_GET["id"]]))
				// {
				// 	$thisVid = $MOVIES[$_GET["id"]];
				// 	// we have id, show player
				// 	require_once 'page_id.php';
				// }
				// else
				// {
				// 	echo "This video is not exist!";
				// }
			}
			elseif(isset($_GET["page"]))
			{
				switch ($_GET["page"])
				{
					case 'about':
						$myPage = 'about';
					break;

					default:
						$myPage = '404';
					break;
				}
			}
			else
			{
				$myPageTitle = '404';
				$myPage = '404';
			}
		}

		// create page path and if not exist show 404
		$pagePath = PASSWD_LAYOUT. "page_". $myPage.".php";
		if(!is_file($pagePath))
		{
			$myPageTitle = '404';
			$pagePath = PASSWD_LAYOUT. "page_404.php";
		}

		// set page title
		if($myPageTitle)
		{
			$myPageTitle = $SITE_TITLE. ' | '. $myPageTitle;
		}
		else
		{
			$myPageTitle = $SITE_TITLE;
		}

		// set page desc
		if(!$myPageDesc)
		{
			$myPageDesc = $SITE_DESC;
		}

		// load html
		require_once "layout/html.php";
	}
}