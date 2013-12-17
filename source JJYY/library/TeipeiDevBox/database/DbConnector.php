<?php
	abstract class DbConnector
	{
		protected $database;
		
		
		public function __construct($file, $sgbd)
		{
			require($file);
			try
			{
				$this->database = new PDO($sgbd . "=" . $ip . "; dbname=" . $database_name, $user, $pass);
			}
			catch(PDOException $e)
			{
				echo "La connection a echouée : " . $e->getMessage();
			}
		}
		public function __destruct()
		{
			$thisdatabase = null;
		}
		
		
		public function Query($query)
		{
			return $this->database->query($query);
		}
	}
?>