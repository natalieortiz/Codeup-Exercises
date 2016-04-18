<?php 

$bottles = 99;
$less_bottles = $bottles - 1;

echo "So what do you want to drink today?\n";

$drink = trim(fgets(STDIN));
usleep(2000000);

echo "That reminds me of a song...\n";
usleep(2000000);

while ($bottles > 0){
	if ($bottles > 1){
		echo "{$bottles} bottles of {$drink} on the wall, {$bottles} bottles of {$drink}. Take one down and pass it around. {$less_bottles} bottles of {$drink} on the wall.\n";
		$bottles--;
		$less_bottles = $bottles - 1;
		usleep(2000000);
	} else if ($bottles = 1){
		echo "{$bottles} bottle of {$drink} on the wall. {$bottles} bottle of {$drink}.  Take one down and pass it around, no more bottles of {$drink} on the wall.\n";
		$bottles--;
		usleep(2000000);
	}
}

echo "No more bottles of {$drink} on the wall, no more bottles of {$drink}. Go to the store and buy some more, 99 bottles of {$drink} on the wall.\n";

