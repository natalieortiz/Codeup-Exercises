<?php 

class Log
{	
	protected static $filename; 

	protected static $handle; 


	protected static function setFilename($prefix)
	{
		// if (!is_string($filename)){
		// 	echo "Filename must be a string.";
		// 	die();
		// }
		self::$filename = strval($prefix) . '-' . date('Y-m-d') . ".log";
	}

	public static function openFile($prefix = "log")
	{
		self::setFilename($prefix);
		self::$handle = fopen(self::$filename, 'a');
		
	}

	public static function logMessage ($logLevel, $message = 'This was left blank')
	{	
		self::openFile();
		fwrite(self::$handle, PHP_EOL . date('Y-m-d h:i:s'). " " . $logLevel . " " . $message);
		self::closeFile();

	}

	public static function logInfo($message)
	{	
		//$this-> allows you to grab a function inside the class. 
		self::logMessage("INFO", $message);
	}

	public static function logError($message)
	{
		self::logMessage("ERROR",$message);
	}

	public static function closeFile()
	{
		fclose(self::$handle);
	}
}

//objects bundle state and behavior.
//objects are state and behavior. 
//behavior are methods that modify that state. 
//constructor - there is no object and all of a sudden there is an object created. 
 ?>