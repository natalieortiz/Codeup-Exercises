<?php 

$adjectives = ['fluffy','difficult','murky','wonky','superb','flippant', 'splendid','tasteless','tacky','plain'];

$nouns = ['tree','spaceship','dachshund','pizza','robot','sloth','blanket','rose','tractor','puzzle'];

function randomElement($array)
{
	$random = mt_rand(0,10);
	$element = $array[$random];
	return $element;
}

function newServer($adjectives,$nouns)
{
	$serverName = randomElement($adjectives) . "-" . randomElement($nouns);
	return $serverName; 
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Server Name Generator</title>
 </head>
 <body>
 	<h1>Here is your new server name:</h1>
 	<p><?php echo newServer($adjectives,$nouns); ?></p>
 </body>
 </html>