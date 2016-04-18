<?php 

$start = $argv[1];
$end = $argv[2];
$increment = $argv[3];



for ($i = $start; $i <= $end; $i += $increment) {
    echo "{$i}\n";
}


