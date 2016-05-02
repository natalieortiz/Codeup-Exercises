<?php 

class Log
{	
	public $filename; 

	public function logMessage ($logLevel, $message)
	{	
		$date = date('Y-m-d');
		$this->filename = "log " . $date . ".log";
		$handle = fopen($this->filename, 'a');
		fwrite($handle, PHP_EOL . $date . " " . date('H:i:s'). $logLevel . " " . $message);
		fclose($handle);
	}

	public function logInfo($string)
	{
		$this->logMessage("INFO", $string);
	}

	public function logError($string)
	{
		$this->logMessage("ERROR",$string);
	}
}

 ?>