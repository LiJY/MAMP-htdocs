<?
	@mysql_connect("localhost","root","root") or die("Problème de connection à la Base de données");
	@mysql_select_db("shopping") or die("La base de données n'est pas accèssible");
	session_start();
?>