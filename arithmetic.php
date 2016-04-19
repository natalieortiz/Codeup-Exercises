<?php

//Given global variables.  PHP will ignore these because we are already passing values to the functions.

$a = 20;
$b = 25;

function add($a, $b)
{
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    echo $a - $b . PHP_EOL; 
}

function multiply($a, $b)
{
	echo $a * $b . PHP_EOL; 	
}

function divide($a, $b)
{
    echo $a / $b . PHP_EOL; 
}

function modulus($a, $b)
{
    echo $a % $b . PHP_EOL; 
}

add(15,15);
subtract(15,15);
multiply(15,15);
divide(15,15);
modulus(15,15);
