<?php

$numbers = [
	1,
	2,
	3,
	4,
	5
];

var_dump($numbers);

print_r($numbers);

echo $numbers[3];

$info = [
	'first_name' => 'Natalie',
	'last_name'=> 'Ortiz',
	'email' => 'ndnatalie@gmail.com',
	'phone' => '210-744-2384'
];

$test = [
	'person1' => [
		'first_name' => 'Natalie',
		'last_name'=> 'Ortiz',
		'email' => 'ndnatalie@gmail.com',
		'phone' => '210-744-2384'
	], 
	'person2' => [
		'first_name' => 'Rita',
		'last_name'=> 'Wilbanks',
		'email' => 'ritawilbanks@yahoo.com',
		'phone' => '210-744-2380'
	],
	'person3' => [
		'first_name' => 'Marcus',
		'last_name'=> 'Wilbanks',
		'email' => 'mlw.usn@gmail.com',
		'phone' => '210-744-5688'
	]
];

print_r($test);

echo $test['person3']['email'];


