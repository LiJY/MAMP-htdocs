<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST'){
	setcookie('fontSize', (int)$_POST['font-size'], time() + 60 * 60);
	header("location:font.php");
}

$font_size = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16px';
?>
<!doctype html>
<html>
<head>
	<title></title>
	<style>
	li{
		list-style: none;
	}
	ul, li{
		margin: 0;
		padding: 0;
	}
	body{
		font-size: <?php echo htmlspecialchars($font_size) . ';'; ?>
		/*font-size: <?= htmlspecialchars($font_size) . ';'; ?>*/
	}
	</style>
</head>
<body>
	<form method="POST">
		<ul>
			<li>
				<label for="font-size">Font Size: </label>
				<select name="font-size" id="font-size">
					<option value="10">10</option>
					<option value="20">20</option>
					<option value="30">30</option>
					<option value="40">40</option>
				</select>
			</li>
			<li>
				<input type="submit" name="submit" value="set">
			</li>
		</ul>
	</form>
	<h2>Your font size !</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, similique, rem, doloribus suscipit tempora magnam ipsa optio enim dicta adipisci placeat alias cum cumque sit possimus. Repudiandae, pariatur alias est suscipit architecto doloribus nobis. Quisquam, voluptatibus magnam neque voluptas veritatis suscipit deleniti. Porro, amet soluta consequuntur numquam velit recusandae quidem itaque ullam ratione maiores a voluptate non. Est, alias dolor voluptatibus praesentium doloribus nobis saepe ex optio architecto cum accusantium reiciendis maiores quos recusandae odio quibusdam expedita illo at repudiandae.</p>
</body>
</html>