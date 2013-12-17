<?php
	abstract class Page
	{
		public static $controllerFolder;
		public static $viewFolder;
		
		protected $data;
		protected $contentFile;
		
		public function __construct($contentFile)
		{
			$this->contentFile = $contentFile;
		}
		
		public function RenderMe()
		{
			include(self::$controllerFolder . $this->contentFile);
			include(self::$viewFolder . $this->contentFile);
		}
		
		public function SetData($dataName, $value)
		{
			$this->data[$dataName] = $value;
		}
		public function GetData($dataName)
		{
			return $this->data[$dataName];
		}
		public function GetContentFilePath()
		{
			return $this->contentFile;
		}
	}
?>