<?php
$months = array(
	'January' => 'http://en.wikipedia.org/wiki/January',
	'february' => 'http://en.wikipedia.org/wiki/February',
	'match' => 'http://en.wikipedia.org/wiki/March',
	'april' => 'http://en.wikipedia.org/wiki/April',
	'may' => 'http://en.wikipedia.org/wiki/May',
	'june' => 'http://en.wikipedia.org/wiki/June',
	'july' => 'http://en.wikipedia.org/wiki/July',
	'august' => 'http://en.wikipedia.org/wiki/August',
	'september' => 'http://en.wikipedia.org/wiki/September',
	'october' => 'http://en.wikipedia.org/wiki/October',
	'nomvember' => 'http://en.wikipedia.org/wiki/November',
	'december' => 'http://en.wikipedia.org/wiki/December'
	);
print_r($months);

function f1($var){
	return strlen($var) == strlen('http://en.wikipedia.org/wiki/July');
}
print_r(array_filter($months, "f1"));
?>