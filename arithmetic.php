<?php

//Given global variables. The functions will work if you use global variables. 


function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    return $a - $b . PHP_EOL; 
}

function multiply($a, $b)
{
	return $a * $b . PHP_EOL; 	
}

function divide($a, $b)
{
    return $a / $b . PHP_EOL; 
}

function modulus($a, $b)
{
    return $a % $b . PHP_EOL; 
}

$a = 20;
$b = 25;

echo add($a,$b);
echo subtract($a,$b);
echo multiply($a,$b);
echo divide($a,$b);
echo modulus($a,$b);

echo add(12,3);
echo subtract(12,3);
echo multiply(12,3);
echo divide(12,3);
echo modulus(12,3);
