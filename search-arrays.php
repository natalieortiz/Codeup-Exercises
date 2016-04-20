<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchArray($name, $array)
{
	if (array_search($name, $array) !== false){
		return "TRUE";
	} else {
		return "FALSE";
	}
	
}

echo searchArray('Tina',$names) . PHP_EOL;
echo searchArray('Bob',$names) . PHP_EOL;