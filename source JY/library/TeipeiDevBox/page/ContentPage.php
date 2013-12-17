<?php
require_once("Page.php");

	class ContentPage extends Page
	{
		protected $creator;
		
		public function __construct($contentFile, $creator)
		{
			parent::__construct($contentFile);
			$this->creator = $creator;
		}
		
		public function UpdateMe()
		{
			$this->RenderMe();
		}
		public function GetCreator()
		{
			return $this->creator;
		}
	}
?>