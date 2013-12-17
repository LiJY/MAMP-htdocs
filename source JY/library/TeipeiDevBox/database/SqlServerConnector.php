<?php
require_once("DbConnector.php");

	class SqlServerConnector extends DbConnector
	{
		public function __construct($file)
		{
			parent::__construct($file, "sqlsrv:Server");
		}
	}
?>