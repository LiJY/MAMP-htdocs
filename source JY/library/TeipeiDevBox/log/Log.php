<?php
	class Log
	{
		protected $filePath;
		
		
		public function __construct($logPath)
		{
			$this->filePath = $logPath;
			if(!is_file($this->filePath))
			{
				fclose(fopen($this->filePath, "a"));
			}
		}
		
		public function AddLine($error)
		{
			if($error == "")
				return;
			
			$file = fopen($this->filePath, "a");
			fwrite($file, $this->formatErrorMessage($error));
			fclose($file);
		}
		public function AddLines($errors)
		{
			if($errors == null)
				return;
			
			$file = fopen($this->filePath, "a");
			foreach($errors as $error)
			{
				fwrite($file, $this->formatErrorMessage($error));
			}
			fclose($file);
		}
		
		private function formatErrorMessage($error)
		{
			return date("d/m/y H:i:s") . " : " . $error . "\n";
		}
	}
?>