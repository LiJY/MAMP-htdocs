<?php
$contentFolder = "content/";
$indicatorSelectionFolder = $contentFolder . "indicatorSelection/";
$dataDisplayFolder = $contentFolder . "dataDisplay/";

$this->AddContent($indicatorSelectionFolder . "listing.php", "indicatorListing");
$this->AddContent($indicatorSelectionFolder . "navButton.php", "navigation");

$this->AddContent($dataDisplayFolder . "tabs.php", "tabs");
$this->AddContent($dataDisplayFolder . "dataRestriction.php", "restrictions");
$this->AddContent($dataDisplayFolder . "display.php", "display");
$this->AddContent($dataDisplayFolder . "bottomButtons.php", "buttons");

$this->AddContent($contentFolder . "welcome.php", "welcome");
?>