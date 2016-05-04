<?php 
	
	require_once '../sites/codeup.dev/ServerName.php';

	$serverName = new ServerName();

	$serverName = $serverName->newServer();

 	echo ($serverName) . PHP_EOL;

