<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
	    return $a + $b . PHP_EOL;	
	}
	else {
		return "Both values must be numeric!\n";
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
	    return $a - $b . PHP_EOL; 	
	} else {
		return "Both values must be numeric!\n";
	}
}

function multiply($a, $b)
{	
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL; 	
	} else {
		return "Both values must be numeric!\n";
	}
}

function divide($a, $b)
{
	if ($b == 0){
		return "Please do not divide by zero.\n";
	} else if (is_numeric($a) && is_numeric($b)) {
		return $a / $b . PHP_EOL; 	
	} else {
		return "Both values must be numeric!";
	}
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
		return $a % $b . PHP_EOL; 	
	} else {
		return "Both values must be numeric!\n";
	}
}


echo add(12,3);
echo subtract('hi',3);
echo multiply(12,3);
echo divide(12,0);
echo modulus(12,3);
