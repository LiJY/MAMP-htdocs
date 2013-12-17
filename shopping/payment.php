<?
	include("includes/db.php");
	include("includes/functions.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment</title>
</head>


<body>
<div align="center">
	<h1 align="center">Choisissez le moyen de payement</h1>
<form name="input" action="cartInfo.php" method="get">
<img src="./paymentImages/paypal.jpg" width="100" height="80"><input type="radio" name="paymentChoice" value="paypal">
<img src="./paymentImages/CB.png" width="100" height="80"><input type="radio" name="paymentChoice" value="cb"> </br>
<input type="submit" value="Submit">
</form>
</div>
</body>
</html>