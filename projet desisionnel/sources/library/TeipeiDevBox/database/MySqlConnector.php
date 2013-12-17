<?php
require_once("DbConnector.php");

	class MySqlConnector extends DbConnector
	{
		public function __construct($file)
		{
			parent::__construct($file, "mysql:host");
		}
	}
?>