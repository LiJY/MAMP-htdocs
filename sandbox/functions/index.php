<?php
// function say_hello($name = "SB"){
// 	return "Hi, $name.\n";
// }
// echo say_hello("LJY");

$people = array(
	array('name' => 'Jianyang', 'age' => 26, 'job' => 'student'),
	array('name' => 'Shucheng', 'age' => 51, 'job' => 'police'),
	array('name' => 'Lian', 'age' => 52, 'job' => 'account')
	);

// function array_pluck($var1,$var2){
// 	foreach ($var2 as $key) {
// 		foreach ($key as $sub_key => $value) {
// 			if ($sub_key === $var1){
// 				echo $value . "\n";
// 			}
// 		}
// 	}
// }

function array_pluck($var1,$var2){
	foreach ($var2 as $key) {
	return array_map(function($key) use($var1){
		return $key[$var1];
	}, $var2);
	}
};

print_r(array_pluck('name',$people));
// print_r($ss);
?>