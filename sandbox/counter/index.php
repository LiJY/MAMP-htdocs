<?php
require 'index.templ.php';

function set_count($file_name='counter.txt'){
	if (file_exists($file_name)) {
		$handle = fopen($file_name, 'r');
		$count = (int)fread($handle, 20) + 1;
		$handle = fopen($file_name, 'w');
		fwrite($handle, $count);
		fclose($handle);
	}else{
		$handle = fopen($file_name, 'w+');
		$count = 1;
		fwrite($handle, $count);
		fclose($handle);
	}
	return $count;
}
die();
 ?>