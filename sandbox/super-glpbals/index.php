<?php
if(!empty($_POST)){
	print_r($_POST);
};
echo $_SERVER['REQUEST_METHOD'];
 ?>

<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>this is a <?php echo htmlspecialchars('<code>'); ?> tag</p>
	<form method="post">
		<ul>
			<li>
				<label for="name">Your name:</label>
				<input type="text" name="name" id="name">
			</li>
			<li>
				<input type="submit" value="OK">
			</li>
		</ul>
	</form>
</body>
</html>