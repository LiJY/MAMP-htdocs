<?php
include 'functions.php';
session_start();
if(!is_logged_in()){
	header("location: login.php");
	die();
}
 ?>

 <!doctype html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
	<p>hello <?php echo $_SESSION['username']; ?> !!</p>
	<a href="logout.php">
	<input type="button" value="logout">
	</a>
 </body>
 </html>