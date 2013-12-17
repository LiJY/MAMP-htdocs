<?php
require_once("Page.php");

	class FullPage extends Page
	{
		protected $contentPages = null;
		
		public function AddContent($contentPage, $name)
		{
			$this->contentPages[$name] = new ContentPage($contentPage, $this);
		}
		
		public function RenderContent($name)
		{
			$this->contentPages[$name]->RenderMe();
		}
		
		public function GetContent($name)
		{
			return $this->contentPages[$name];
		}
		
		public function GetContents()
		{
			return $this->contentPages;
		}
	}
?>