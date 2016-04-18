<?php 

$start = $argv[1];
$end = $argv[2];
$increment = 1;

//checks to make sure that input is a number. 
if (is_numeric($argv[1]) == false || is_numeric($argv[2]) == false) {
	echo "Please enter whole numbers!\n";
}

//if user enters value for increment, use that as the value to increment by. 
if ($argc == 4){
	$increment = $argv[3];
}

//Prints out each number given user parameters. 
for ($i = $start; $i <= $end; $i += $increment) {
    echo "{$i}\n";
}


