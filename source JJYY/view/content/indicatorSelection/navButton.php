
<link rel="stylesheet" type="text/css" href="multiple-select-master/multiple-select.css">
<style type="text/css">
#selectorCategory{
	width: 70%;
}
#newIndicatorName{
	width: 80.5%;
}
#dataDiv, #aggregationDiv{
	height: 165px;
	overflow: auto;
}
#CreateButton{
	width: 140px;
	height: 30px;
	font-size: 18px;
	color: #FFFFFF;
	background-color: #333333;
	float: right;
	margin-top: 10px;
}
</style>



<button name="createIndicator" id="createIndicatorButton" class="listButton">
	Create indicator
</button>
<button name="modify" id="modifyButton" class="listButton">
	Modify
</button>
<button name="delete" id="deleteButton" class="listButton">
	Delete
</button>
<button name="setGlobal" id="setGlobalButton" class="listButton">
	Set	as Global Indicator
</button>
<button name="creatCategory" id="creatCategoryButton" class="listButton">
	Create Category
</button>


<button name="exposeButton" id="exposeButton" class="listButton">
	Expose
</button>

<div id="createIndicatorDialog" title="Create indicator">
	<form>
		<table id="createIndicatorDialogTable" border="0" style=" border:1px solid #fff;" cellpadding="0" cellspacing="1">
			<tr>
				<td colspan='2'>
					<label for="newIndicatorName">Name:</label>
					<input type="text" name="newIndicatorName" id="newIndicatorName"/>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<label>Category:</label>
					<select id="selectorCategory" multiple>
						<option>Category 1</option>
						<option>Category 2</option>
						<option>Category 3</option>
						<option>Category 4</option>
						<option>Category 5</option>
						<option>Category 6</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="center" bgcolor="4c4c4c" style="color: #fff" style=" border:1px solid #000000;">Data</td>
				<td align="center" bgcolor="4c4c4c" style="color: #fff" style=" border:1px solid #000000;">Aggregation</td>
				<tr>
					<td width="50%" style=" border:1px solid #000000;">
						<div id="dataDiv">
							<form>
								<input type="checkbox" name="data" value="data1">data 1<br>
								<input type="checkbox" name="data" value="data2">data 2<br>
								<input type="checkbox" name="data" value="data3">data 3<br>
								<input type="checkbox" name="data" value="data4">data 4<br>
								<input type="checkbox" name="data" value="data5">data 5<br>
								<input type="checkbox" name="data" value="data6">data 6<br>
								<input type="checkbox" name="data" value="data7">data 7<br>
								<input type="checkbox" name="data" value="data8">data 8<br>
								<input type="checkbox" name="data" value="data9">data 9<br>
								<input type="checkbox" name="data" value="data10">data 10
							</form>
						</div>
					</td>
					<td width="50%" style=" border:1px solid #000000;">
						<div id="aggregationDiv">
							<form>
								<input type="checkbox" name="Aggregation" value="Aggregation1">Aggregation 1<br>
								<input type="checkbox" name="Aggregation" value="Aggregation2">Aggregation 2<br>
								<input type="checkbox" name="Aggregation" value="Aggregation3">Aggregation 3<br>
								<input type="checkbox" name="Aggregation" value="Aggregation4">Aggregation 4<br>
								<input type="checkbox" name="Aggregation" value="Aggregation5">Aggregation 5<br>
								<input type="checkbox" name="Aggregation" value="Aggregation6">Aggregation 6<br>
								<input type="checkbox" name="Aggregation" value="Aggregation7">Aggregation 7<br>
							</form>
						</div>
					</td>
				</tr>
			</table>
			<input type="submit" value="Create" id="CreateButton">
		</form>
	</div>
	<script type="text/javascript" src='multiple-select-master/jquery.multiple.select.js'></script>
	<script>
	$("#createIndicatorDialog").dialog({autoOpen: false, resizable: false, modal: true, width:'auto'});
	$('#createIndicatorButton').click(function() {
		$('#createIndicatorDialog').dialog('open');
		$("#selectorCategory").multipleSelect();
	});
	</script>
