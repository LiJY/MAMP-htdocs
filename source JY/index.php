<?php
session_start();
$absoluteRootFolder = realpath(".");

//include required config files
require_once("wheresMyConfig.php");
require_once(EarlyConfig::$configFolder . "globalInfo.php");

//include libraries
/* this way allows to choose whether to load a library */
$libraries = scandir(Config::$libraryFolder); 
for($i = 2; $i < count($libraries); $i++)
{
	$library = $libraries[$i];
	$libraryFiles = getFiles(Config::$libraryFolder . $library . "/", true);
	foreach($libraryFiles as $file)
	{
		include_once($file);
	}
}

//init error logs
$sqlErrorLog = new Log(Config::$errorLogPath . Config::$sqlLogFile);
$phpErrorLog = new Log(Config::$errorLogPath . Config::$phpLogFile);

//get file name to load
$loadMe = isset($_GET['page']) ? $_GET['page'] : Config::$defaultSitePage;
$loadPageErrors = null;
if(!is_file(Config::$controllerFolder . $loadMe))
{
	$error = "Missing following controller : " . $loadMe;
	$loadPageErrors[] = $error;
	if(Config::$debug) echo $error . "\n";
}
if(!is_file(Config::$viewFolder . $loadMe))
{
	$error = "Missing following view : " . $loadMe;
	$loadPageErrors[] = $error;
	if($debug) echo $error . "\n";
}
$fileToLoad = $loadPageErrors == null ? $loadMe : Config::$defaultSitePage;
$phpErrorLog->AddLines($loadPageErrors);
unset($loadPageErrors);

//get files path to load
$controllerFile = Config::$controllerFolder . $fileToLoad;
$viewFile = Config::$viewFolder . $fileToLoad;

//init Page
Page::$controllerFolder = Config::$controllerFolder;
Page::$viewFolder = Config::$viewFolder;
$myPage = new FullPage($fileToLoad);
?>


<?php include(Config::$includeFolder . "doctype.php"); ?>
<html>
	<head>
		<?php include(Config::$includeFolder . "head.php"); ?>
	</head>
	<body>
		<?php  $myPage->RenderMe(); ?>
	</body>
</html>




<?php
function getFiles($folderPath, $recursive = false, $currentFolder = null)
{
	$filesPath = null;
	if(!$currentFolder)
	{
		$currentFolder = $folderPath;
	}
	$content = scandir($folderPath);
	for($i = 2; $i < count($content); $i++)
	{
		if(is_dir($folderPath . $content[$i]) && $recursive)
		{
			$folderContent = getFiles($folderPath . $content[$i] . "/", $recursive, $content[$i] . "/");
			if($folderContent != null)
			{
				foreach($folderContent as $file)
				{
					$filesPath[] = $currentFolder . $file;
				}
			}
		}
		else
		{
			$filesPath[] = $currentFolder . $content[$i];
		}
	}
	
	return $filesPath;
}
function addContent($filePath, $name, $page)
{
	include_once(Config::$controllerFolder . $filePath);
	$page->AddContent(new ContentPage(Config::$viewFolder . $filePath), $name);
}
?>