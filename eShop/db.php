<?php
 @mysql_connect("localhost","root","root") or die("problème de connection")
 @mysql_select_db("eShop") or die("La base de données n'est pas accèssible")
session_start();
?>