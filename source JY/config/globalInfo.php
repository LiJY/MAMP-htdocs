<?php
class Config
{
	//important folders location
	public static $controllerFolder;
	public static $modelFolder;
	public static $libraryFolder;
	public static $includeFolder;
	public static $viewFolder;
	public static $errorLogPath;

	//style and scripts
	public static $javascriptFolder;
	public static $javascriptLibraryFolder;
	public static $cssFolder;

	//default configs
	public static $defaultSitePage;

	//stored variables
	public static $sessionVariables;

	//debugging
	public static $debug;
	public static $sqlLogFile;
	public static $phpLogFile;
	
	public static function init()
	{
		//important folders location
		self::$controllerFolder = "./controller/";
		self::$modelFolder = "./model/";
		self::$libraryFolder = "./library/";
		self::$includeFolder = EarlyConfig::$configFolder . "includes/";
		self::$viewFolder = "./view/";
		self::$errorLogPath = "./log/";

		//style and scripts
		self::$javascriptFolder = self::$viewFolder . "javascript/";
		self::$javascriptLibraryFolder = self::$javascriptFolder . "library/";
		self::$cssFolder = self::$viewFolder . "css/";

		//default configs
		self::$defaultSitePage = "index.php";
		
		//stored variables
		self::$sessionVariables = EarlyConfig::$configFolder . "session.php";

		//debugging
		self::$debug = true;
		self::$sqlLogFile = "sqlLog.txt";
		self::$phpLogFile = "errorLog.txt";
	}
}

Config::init();
?>