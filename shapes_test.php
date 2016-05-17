<?php 


require_once 'Square.php';


$square = new Square(7);
echo 'The area is ' . $square->area() . PHP_EOL;
echo 'The perimeter is ' . $square->perimeter() . PHP_EOL;

$rectangle = new Rectangle(4,7);
echo 'The area of the rectangle is ' . $rectangle->area() . PHP_EOL;

echo 'The perimeter of the rectangle is ' . $rectangle->perimeter() . PHP_EOL;



