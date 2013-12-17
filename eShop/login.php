<?php
include("includus/config.php");
if($_SERVER("REQUEST_METHOD")=="POST"){
	$myusername=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']);
	$sql="SELCT id FROM admin WHERE username='$myusername' and password='$mypassword'";

}
?>

<html>
<head>
	<title>login window</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript" src="jQuery.js"></script>
</head>

<body>
	<form action="checkin.php" name="form1" methode="post">
		<table>
			<caption><h3>Login</h3></caption>
			<tr>
				<td>nom d'utilisatueur: </td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td>mot de passe</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		
	</form>
</body>

</html>
