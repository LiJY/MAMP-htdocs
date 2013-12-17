<button name="login" id="loginButton">
	Login
</button>

<div id="dialog" title="Login">
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
$("#dialog").dialog({autoOpen: false, resizable: false, modal: true, width:'auto'});
$('#loginButton').click(function() {
    $('#dialog').dialog('open');
});
</script>

<style type="text/css">
	#loginDialogButton{
		float: right;
		margin-top: 10px;
		margin-left: 5px;
	}
</style>