<table id="mainTable" cellspacing="0">
	<tr>
		<td id="indicatorSelection" rowspan="2">
			<p class="title">Select your indicator</p>
			<?php $this->RenderContent("indicatorListing"); ?>
			<?php $this->RenderContent("navigation"); ?>
		</td>
		<td id="tabs">
			<?php $this->RenderContent("tabs"); ?>
		</td>
		<td id="welcome">
			<?php $this->RenderContent("welcome"); ?>
		</td>
	</tr>
	<tr>
		<td id="dataDisplay" colspan="2">
			<?php $this->RenderContent("restrictions"); ?>
			<?php $this->RenderContent("display"); ?>
			<?php $this->RenderContent("buttons"); ?>
		</td>
	</tr>
</table>