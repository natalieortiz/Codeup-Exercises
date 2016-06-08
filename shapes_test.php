<?php 


require_once 'Square.php';


$square = new Square(8);
echo 'The area is ' . $square->area() . PHP_EOL;
echo 'The perimeter is ' . $square->perimeter() . PHP_EOL;

$rectangle = new Rectangle(3,9);
echo 'The area of the rectangle is ' . $rectangle->area() . PHP_EOL;

echo 'The perimeter of the rectangle is ' . $rectangle->perimeter() . PHP_EOL;

function shapesToJson($shape){

  return json_encode(['area' => $shape->area(), 'perimeter' =>$shape->perimeter()]);
}

echo shapesToJson($square);
echo shapesToJson($rectangle);

