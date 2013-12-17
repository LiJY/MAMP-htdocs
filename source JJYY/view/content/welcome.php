<button name="login" id="loginButton">
	Login
</button>

<div id="loginDialog" title="Login">
	<form>
		<table>
			<tr>
				<td>
					<label for="id">ID:</label>
				</td>
				<td>
					<input type="text" name="id" id="id"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="password">Password:</label>
				</td>
				<td>
					<input type="password" name="password" id="password"/>
				</td>
			</tr>
		</table>
		<input type="submit" value="Login" id="loginDialogButton">
	</form>
</div>

<script>
$("#loginDialog").dialog({autoOpen: false, resizable: false, modal: true, width:'auto'});
$('#loginButton').click(function() {
	$('#loginDialog').dialog('open');
});
</script>

<style type="text/css">
#loginDialogButton{
	margin-top: 10px;
	margin-left: 5px;
	width: 140px;
	height: 30px;
	font-size: 18px;
	color: #FFFFFF;
	background-color: #333333;
	float: right;
	margin-top: 10px;
}
</style>
