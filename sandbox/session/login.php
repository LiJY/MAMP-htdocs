<?php
include 'config.php';
include 'functions.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if(valid_user_creds($username,$password)){
				$_SESSION['username'] = $username;
		header("location: admin.php");
	}else{
		$statue = "username or password incorrect !!";
	};

}

?>

<!doctype html>
<html>
<head>
	<title></title>
	<style>
	li{
		list-style: none;
		display: block;
	}
	</style>
</head>
<body>
	<h1>Welcome!!</h1>
	<form method='post'>
		<ul>
			<li><label for="username">Username: </label><input type="text" name="username"></li>
			<li><label for="password">Password: </label><input type="password" name="password"></li>
			<li><input type="submit" value="Login"></li>
		</ul>
		<?php if(isset($statue)): ?>
		<p><?php echo $statue; ?></p>
	<?php endif; ?>
</form>
</body>
</html>