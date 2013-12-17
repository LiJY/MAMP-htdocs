<style type="text/css">
.tabs {
				margin: 0;
				padding: 0;
				float: left;
				list-style: none;
				height: 32px;
				border-bottom: 1px solid #999;
				border-left: 1px solid #999;
				width: 100%;
			}
			.tabs li {
				float: left;
				margin: 0;
				padding: 0;
				height: 31px;
				line-height: 31px;
				border: 1px solid #999;
				border-left: none;
				margin-bottom: -1px;
				overflow: hidden;
				position: relative;
				background: #e0e0e0;
			}
			.tabs a {
				text-decoration: none;
				color: #000;
				display: block;
				font-size: 1.2em;
				padding: 0 10px;
				border: 1px solid #fff;
				outline: none;
			}
			.tabs a:hover {
				background: #ccc;
			}
			.tabs li.active,
			.tabs li.active a:hover {
				background: #fff;
				border-bottom: 1px solid #fff;
			}

			.tabContent {
				border: 1px solid #999;
				border-top: none;
				padding-top: 10px;
				overflow: hidden;
				clear: both;
				float: left;
				width: 100%;
				height: 666px;
				background: #fff;
			}
			.tabBody {
				height: 100%;
				font-size: 1.2em;
			}

			.restriction{
				height: 65px;
				border: 2px solid #4C4C4C;
				border-radius: 10px;
				margin-left: 10px;
				margin-right: 10px;
				position: relative;
				display: block;
				clear: both;
				padding: 5px 5px 0px 15px;
			}
			.colonnes{
				display: inline-block;
			}
			#optionTable{
				display: inline-block;
			}
			#saveRestriction{
				width: 60px;
				height: 60px;
				float: right;
				border: 1px solid #4C4C4C;
				border-radius: 50px;
				position: relative;
				display: inline;
			}

			.exportButton{
				width: 170px;
 				height: 35px;
 				font-size: 18px;
 				color: #FFFFFF;
 				background-color: #333333;
 				display: block;
				bottom: 0px;
				margin-left: 10px;
				left: 0;
				position: absolute;
			}



}
</style>



<!-- les tabs!-->
<ul class="tabs">
	<li><a href="#tableDisplay">Table</a></li>
	<li><a href="#graphDisplay">Graph</a></li>
	<li><a href="#updateDisplay">Update</a></li>
</ul>

<!--contenus relient à chaque tab!-->
<div class="tabContent">
	<div id="tableDisplay" class="tabBody">
		<!--les options de restriction!-->
		<div class="restriction">
			<table id="optionTable">
			<tr>
				<td>
				<!--choisir toute la période-->
				<input type="radio" name="quux[2]" id="baz[1]"checked>
				<label for="baz[1]">All periode</label>
	
				<!--un interval-->
				<input type="radio" name="quux[2]" id="baz[3]">
				<label for="baz[2]">
				From: 
				<select class="combobox">
					<option value="1">2003</option>
					<option value="2">2004</option>
					<option value="3">2005</option>
					<option value="4">2006</option>
					<option value="5">2007</option>
					<option value="6">2008</option>
					<option value="7">2009</option>
					<option value="8">2010</option>
					<option value="9">2011</option>
					<option value="10">2012</option>
				</select>
				To:
				<select class="combobox">
					<option value="1">2003</option>
					<option value="2">2004</option>
					<option value="3">2005</option>
					<option value="4">2006</option>
					<option value="5">2007</option>
					<option value="6">2008</option>
					<option value="7">2009</option>
					<option value="8">2010</option>
					<option value="9">2011</option>
					<option value="10">2012</option>
				</select>
				</label>
				<!--choisir des années-->
				<input type="radio" name="quux[2]" id="baz[3]">
				<label for="baz[3]">
				<select id="yearSelector" multiple>
					<option value="1">2003</option>
					<option value="2">2004</option>
					<option value="3">2005</option>
					<option value="4">2006</option>
					<option value="5">2007</option>
					<option value="6">2008</option>
					<option value="7">2009</option>
					<option value="8">2010</option>
					<option value="9">2011</option>
					<option value="10">2012</option>
				</select>
				</label>
				</td>
			</tr>
			<tr>
				<td>
					<!--les colonnes d'option-->
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
				</td>
			<tr>
			</table>
					<!--boutton pour sauvgarder comme défaut-->
					<button id="saveRestriction">Save as defaut</button>
				
			
		</div>
		Table
		<button class="exportButton">Export</button>
	</div>

	<div id="graphDisplay" class="tabBody">
	<div class="restriction">
			<table id="optionTable">
			<tr>
				<td>
				<!--choisir toute la période-->
				<input type="radio" name="quux[2]" id="baz[1]"checked>
				<label for="baz[1]">All periode</label>
	
				<!--un interval-->
				<input type="radio" name="quux[2]" id="baz[3]">
				<label for="baz[2]">
				From: 
				<select class="combobox">
					<option value="1">2003</option>
					<option value="2">2004</option>
					<option value="3">2005</option>
					<option value="4">2006</option>
					<option value="5">2007</option>
					<option value="6">2008</option>
					<option value="7">2009</option>
					<option value="8">2010</option>
					<option value="9">2011</option>
					<option value="10">2012</option>
				</select>
				To:
				<select class="combobox">
					<option value="1">2003</option>
					<option value="2">2004</option>
					<option value="3">2005</option>
					<option value="4">2006</option>
					<option value="5">2007</option>
					<option value="6">2008</option>
					<option value="7">2009</option>
					<option value="8">2010</option>
					<option value="9">2011</option>
					<option value="10">2012</option>
				</select>
				</label>
				<!--choisir des années-->
				<input type="radio" name="quux[2]" id="baz[3]">
				<label for="baz[3]">
				<select id="yearSelector2" multiple>
					<option value="1">2003</option>
					<option value="2">2004</option>
					<option value="3">2005</option>
					<option value="4">2006</option>
					<option value="5">2007</option>
					<option value="6">2008</option>
					<option value="7">2009</option>
					<option value="8">2010</option>
					<option value="9">2011</option>
					<option value="10">2012</option>
				</select>
				</label>
				</td>
			</tr>
			<tr>
				<td>
					<!--les colonnes d'option-->
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
					<select class="colonnes" multiple>
					<option value="1">Option1</option>
					<option value="2">Option2</option>
					<option value="3">Option3</option>
					<option value="4">Option4</option>
					<option value="5">Option5</option>
					<option value="6">Option6</option>
					<option value="7">Option7</option>
					<option value="8">Option8</option>
					<option value="9">Option9</option>
					<option value="10">Option10</option>
					</select>
				</td>
			<tr>
			</table>
					<!--boutton pour sauvgarder comme défaut-->
					<button id="saveRestriction">Save as defaut</button>
			</div>
		Graph
		<button class="exportButton">Export</button>
	</div>

	<div id="updateDisplay" class="tabBody">
		<!--selecteur de fichier pour mise à jours BDD-->
		<label for="uploadButton">Select a file to upload</label>
		<input type="file" id="uploadButton">
	</div>
</div>