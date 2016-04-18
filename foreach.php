<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $item) {
	echo gettype($item) . PHP_EOL;
}

// foreach ($things as $item) {
// 	if (is_int($item)){
// 		echo "{$item} is a number.\n";
// 	} else if (is_float($item)){
// 		echo "{$item} is a floating number.\n";
// 	} else if (is_bool($item)) {
// 		echo "{$item} is a boolean.\n";
// 	} else if (is_array($item)) {
// 		echo print_r($item) . " is an array.\n";
// 	} else if (is_null($item)) {
// 		echo "{$item} is a null.\n";
// 	} else if (is_string($item)) {
// 		echo "{$item} is a string.\n";
// 	}
// }	