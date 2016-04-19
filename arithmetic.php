<?php

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
	    return $a + $b;	
	}
	else {
		return throwErrorMessage($a , $b);
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)){
	    return $a - $b; 	
	} else {
		return throwErrorMessage($a , $b);
	}
}

function multiply($a, $b)
{	
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b; 	
	} else {
		return throwErrorMessage($a , $b);
	}
}

function divide($a, $b)
{
	if ($b == 0){
		return "Please do not divide by zero.";
	} else if (is_numeric($a) && is_numeric($b)) {
		return $a / $b; 	
	} else {
		return throwErrorMessage($a , $b);
	}
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
		return $a % $b; 	
	} else {
		return throwErrorMessage($a , $b);
	}
}

function throwErrorMessage ($a , $b){
	return "{$a} and {$b} must be numeric!";
}


echo add('twelve',3) . PHP_EOL;
echo subtract('hi',3) . PHP_EOL;
echo multiply(12,3) . PHP_EOL;
echo divide(12,0) . PHP_EOL;
echo modulus(12,3) . PHP_EOL;

