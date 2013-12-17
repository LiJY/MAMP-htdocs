	<script type="text/javascript" src='jQV/js/visualize.jQuery.js'></script>
	<link href="jQV/css/visualize.css" type="text/css" rel="stylesheet" />

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
	#uploader{
		width: 95%;
		height: 95%;
		margin-left: 20px;
		margin-left: 20px;	
		border: 0;
	}
	#tableExample{
		margin: 0 auto;
		margin-top: 200px;
		border-collapse: collapse;
	}
	#tableExample td, th{ 
		text-align: center; 
		border: 1px solid #ddd; 
		padding:2px 5px; 
	}
	#tableExample th {
		background-color: #666;
		color: #fff;
	}
	#graphSelectorDiv {
		margin-top: 20px;
		text-align: center;
	}
	#graphSelector{
		font-size: 16px;
		font-style: bold;
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
							<label for="baz[1]">All period</label>
							
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
					<table id="tableExample">
						<thead>
							<tr>
								<td></td>
								<th scope="col">food</th>
								<th scope="col">auto</th>
								<th scope="col">household</th>
								<th scope="col">furniture</th>
								<th scope="col">kitchen</th>
								<th scope="col">bath</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">Mary</th>
								<td>190</td>
								<td>160</td>
								<td>40</td>
								<td>120</td>
								<td>30</td>
								<td>70</td>
							</tr>
							<tr>
								<th scope="row">Tom</th>
								<td>3</td>
								<td>40</td>
								<td>30</td>
								<td>45</td>
								<td>35</td>
								<td>49</td>
							</tr>
							<tr>
								<th scope="row">Brad</th>
								<td>10</td>
								<td>180</td>
								<td>10</td>
								<td>85</td>
								<td>25</td>
								<td>79</td>
							</tr>
							<tr>
								<th scope="row">Kate</th>
								<td>40</td>
								<td>80</td>
								<td>90</td>
								<td>25</td>
								<td>15</td>
								<td>119</td>
							</tr>		
						</tbody>
					</table>	
					<button class="exportButton">Export</button>
				</div>

				<div id="graphDisplay" class="tabBody">
					<div class="restriction">
						<table id="optionTable">
							<tr>
								<td>
									<!--choisir toute la période-->
									<input type="radio" name="quux[2]" id="baz[1]"checked>
									<label for="baz[1]">All period</label>
									
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
							<div id="graphSelectorDiv">
								Graph style: 
								<select id="graphSelector">
									<option id="graphOption1" value="pie" selected>Pie graph</option>
									<option id="graphOption2" value="bar" >Bar graph</option>
									<option id="graphOption3" value="line">Line graph</option>
									<option id="graphOption3" value="area">Area graph</option>
								</select>
							</div>
							<button class="exportButton">Export</button>
						</div>

						<div id="updateDisplay" class="tabBody" >
							<!--selecteur de fichier pour mise à jours BDD-->
		<!--
		<label for="uploadButton">Select a file to upload</label>
		<input type="file" id="uploadButton">
	-->
	<iframe id="uploader" src="http://localhost:8888/source%20JJYY/view/javascript/library/JUP/""></iframe>
</div>
</div>