<body>
	<div id="mainWindow">
	<div id="leftArea">		
	<p id="title">Select your indicator</p>
	<div id="listHead">List of indicator</div>
	<?php $this->RenderContent("indicatorListing"); ?>
	<?php $this->RenderContent("navigation"); ?>
	</div>



	<div id="welcome">
		<?php $this->RenderContent("welcome"); ?>
	</div>



	<div id="tabsDisplay">


<!-- on regroupe les tabs dans le "display.php"
		<div id="tabs">
			<?php //$this->RenderContent("tabs"); ?>
		</div>
!-->

		<div id="dataDisplay">
				<!--
				<?php // $this->RenderContent("restrictions"); ?>
				!-->
				<?php $this->RenderContent("display"); ?>
				<?php $this->RenderContent("buttons"); ?>
		</div>
	</div>
	</div>
</body>