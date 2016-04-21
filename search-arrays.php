<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchArray($name, $array)
{
	if (array_search($name, $array) !== false){
		return true;
	} else {
		return false;
	}
	
}

function compareArrays($array1, $array2)
{	
	$count = 0;
	foreach($array1 as $name){
		if (searchArray($name, $array2)){
			$count++;
		}	
	}
	return $count; 
}

var_dump (searchArray('Tina',$names));
var_dump (searchArray('Bob',$names));
echo compareArrays($names, $compare) . PHP_EOL;

// $items[]= 'last thing';
// $items[8] = 'one thing';