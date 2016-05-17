<?php 

require_once 'Rectangle.php';

class Square extends Rectangle
{

	public function __construct($height)
	{	
		parent::__construct($height, $height);
	}


	public function perimeter()
	{
		$perimeter = $this->height * 4;
		return $perimeter;
	}

	public function area()
	{
		
		$area = $this->height * $this->height;
		return $area; 

	}

}

