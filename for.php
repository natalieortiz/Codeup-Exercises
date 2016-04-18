<?php 

$start = $argv[1];
$end = $argv[2];
$increment = 1;

if (is_numeric($argv[1]) == false || is_numeric($argv[2]) == false) {
	echo "Please enter whole numbers\n";
}

//if user enters value for increment, use that as the value to increment by. 
if ($argc == 4){
	$increment = $argv[3];
}


for ($i = $start; $i <= $end; $i += $increment) {
    echo "{$i}\n";
}


