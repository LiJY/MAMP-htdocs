<?
	include("includes/db.php");
	include("includes/functions.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Payment</title>

<style type="text/css">
div form{
	text-align: left;
}
.container{
	margin: 0px auto;
	text-align: center;	
}
</style>

</head>


<body>
<div  class="container">
	<h1 align="center">Entrez les informations de votre carte bancaire</h1>
<form name="cartInfo"  method="post" >
	<label>Numéro de carte:</label> 
	<input type="text" name="numCart" size=32><br>
	<label>Date de valididé:</label> 
	<input type="text" name="dateValideMonth" size=2 maxlength=2 value=mm> / <input type="text" name="dateValideYear" size=4 maxlength=4 value=yyyy>
	</br>
	<label>Cryptogramme visuel numérique:</label> 
	<input type="text" name="CVN" size=2 maxlength=3 >
	</br>
<input type="submit" value="valide">
</form>
</div>
</body>
</html>